<?php $this->extend('Layout/main-layout'); ?>
<?php $this->section('content'); ?>

<?php
$isPastEvent = false;
if (!empty($event['date_end_to'])) {
    $eventEndDate = new DateTime($event['date_end_to']);
    $currentDate = new DateTime();
    $tomorrow = (new DateTime())->modify('+1 day');
    $isPastEvent = $eventEndDate < $currentDate && $eventEndDate->format('Y-m-d') !== $tomorrow->format('Y-m-d');
}
?>

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-20">
                        <h2 class="mt-2">Event Detail</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-4">
                <div class="col-lg-8 text-center">
                    <h2 class="fw-bold"><?= esc($event['event_name']) ?></h2>
                    <?php if (!empty($event['samiti_organisers'][0]['sub_category']['samiti_sub_category_name'])): ?>
                        <p class="text-muted fs-5">
                            <i class="ti ti-users me-1 text"></i>
                            <?= esc($event['samiti_organisers'][0]['sub_category']['samiti_sub_category_name']) ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body">
                            <h4 class="mb-3 text">Event Description</h4>
                            <p class="text-secondary mb-0" style="white-space: pre-line;">
                                <?= esc($event['event_description']) ?>
                            </p>
                        </div>
                    </div>

                    <?php if (!empty($event['all_event_dates'])): ?>
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <h4 class="mb-3 text">Event Schedule</h4>
                                <ul class="list-group">
                                    <?php foreach ($event['all_event_dates'] as $edt): ?>
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>
                                                <i class="ti ti-calendar text me-2"></i>
                                                <strong><?= date('l, j F Y', strtotime($edt['event_date'])) ?></strong>
                                            </div>
                                            <div class="text-muted">
                                                <?php
                                                $start = $edt['event_start_time'] ? date('g:i A', strtotime($edt['event_start_time'])) : '—';
                                                $end = $edt['event_end_time'] ? date('g:i A', strtotime($edt['event_end_time'])) : '—';
                                                ?>
                                                <?= $start ?> <?= ($start !== '—' && $end !== '—') ? 'to' : '' ?> <?= $end ?>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php else: ?>
                        <p class="text-danger">No time slots available for this event.</p>
                    <?php endif; ?>

                    <?php if (!empty($event['event_organiser_mobile'])): ?>
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <h4 class="mb-3 text">Organizer Details</h4>
                                <p><strong>Coordinator:</strong> <?= esc($event['event_organiser_name']) ?></p>

                                <p><strong>Contact:</strong> <?= esc($event['event_organiser_mobile']) ?></p>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($event['youtube_url'])): ?>
                        <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <h4 class="mb-3 text">Event Video</h4>
                                <div class="ratio ratio-16x9">
                                    <iframe
                                        src="https://www.youtube.com/embed/<?= extractYouTubeID($event['youtube_url']) ?>"
                                        title="YouTube video" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm border-0 mb-4">
                        <div class="card-body text-center">
                            <h5 class="text mb-3">Event Image</h5>
                            <?php
                            $eventImage = !empty($event['event_image'])
                                ? API_BASE_URL . 'public/' . $event['event_image']
                                : base_url('public/uploads/img-add-event.png');
                            ?>
                            <img src="<?= esc($eventImage) ?>" class="img-fluid rounded mb-3" alt="Event Image"
                                style="max-height: 300px; object-fit: cover;">
                        </div>
                    </div>

                    <?php if (!empty($event['event_terms_and_condition_document'])): ?>
                        <div class="card shadow-sm border-0">
                            <div class="card-body text-center">
                                <h5 class="text mb-3">Event Document</h5>
                                <?php $docUrl = API_BASE_URL . 'public/' . $event['event_terms_and_condition_document']; ?>
                                <button type="button" class="btn btn-outline w-100"
                                    onclick="openDocumentPreview('<?= esc($docUrl) ?>')">
                                    <i class="ti ti-eye me-1"></i> View Document
                                </button>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="modal fade" id="documentModal" tabindex="-1" aria-labelledby="documentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Document Preview</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center" id="documentPreviewContainer"></div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        function openDocumentPreview(docUrl) {
            const fileExtension = docUrl.split('.').pop().toLowerCase();
            const previewContainer = document.getElementById('documentPreviewContainer');
            if (fileExtension === 'pdf') {
                previewContainer.innerHTML = `<iframe src="${docUrl}" width="100%" height="100%" style="border:none;"></iframe>`;
                new bootstrap.Modal(document.getElementById('documentModal')).show();
            } else {
                window.open(docUrl, '_blank');
            }
        }
    });
</script>

<style>
    h4.text {
        border-left: 4px solid #00c48c;
        padding-left: 10px;
    }

    .card {
        border-radius: 12px !important;
    }
</style>

<?php $this->endSection(); ?>