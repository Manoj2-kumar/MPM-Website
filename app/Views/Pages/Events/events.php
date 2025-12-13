<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    .filter-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 18px;
        margin-top: 30px;
        flex-wrap: wrap;
    }

    .filter-select {
        height: 56px;
        padding: 0 20px;
        border: 2px solid #d1d5db;
        border-radius: 10px;
        font-size: 16px;
        color: #333;
        background-color: #fff;
        min-width: 260px;
        outline: none;
        transition: all 0.2s ease;
        appearance: none;
        background-repeat: no-repeat;
        background-size: 14px;
        background-position: right 16px center;
    }

    .filter-select:focus {
        border-color: #00c48c;
        box-shadow: 0 0 0 3px rgba(0, 196, 140, 0.15);
    }

    .search-btn {
        height: 56px;
        padding: 0 36px;
        background-color: #00c48c;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .search-btn:hover {
        background-color: #00a676;
        transform: translateY(-2px);
    }

    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
        justify-items: center;
        margin-top: 40px;
    }

    .event-card {
        width: 100%;
        max-width: 350px;
        background-color: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
        cursor: pointer;
    }

    .event-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.12);
    }

    .event-img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        background-color: #f4f4f4;
        display: block;
    }

    .event-details {
        width: 100%;
        text-align: left;
        padding: 18px 20px 25px;
    }

    .event-details .detail-row {
        display: flex;
        justify-content: flex-start;
        align-items: flex-start;
        padding: 4px 0;
        font-size: 14px;
        color: #555;
    }

    .event-details .detail-row strong {
        flex: 0 0 120px;
        text-align: left;
        margin-left: 10px;
        position: relative;
        color: #222;
        font-weight: 600;
    }

    .event-details .detail-row strong::after {
        content: ":";
        margin-left: 5px;
        font-weight: 600;
    }

    .event-details .detail-row span {
        flex: 1;
        text-align: left;
        color: #444;
    }
</style>

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Events</h2>
                    </div>
                </div>
            </div>

            <form method="get" action="<?= base_url('public/events') ?>" class="filter-bar">
                <select class="filter-select" name="filter">
                    <option value="all" <?= $selectedFilter === 'all' ? 'selected' : '' ?>>All Events</option>
                    <option value="upcoming" <?= $selectedFilter === 'upcoming' ? 'selected' : '' ?>>Upcoming Events</option>
                    <option value="past" <?= $selectedFilter === 'past' ? 'selected' : '' ?>>Past Events</option>
                </select>
                <button type="submit" class="btn search-btn">Search</button>
            </form>

            <?php if (!empty($events)): ?>
                <div class="events-grid">
                    <?php foreach ($events as $event): ?>
                        <?php
                        $startDate = date('d M Y', strtotime($event['start_date']));
                        $endDate = date('d M Y', strtotime($event['end_date']));
                        ?>
                        <div class="event-card"
                            onclick="window.location='<?= base_url('public/event_detail/' . $event['event_id']) ?>'">
                            <?php if (!empty($event['event_image'])): ?>
                                <img src="<?= base_url('uploads/events/' . $event['event_image']) ?>"
                                    alt="<?= esc($event['event_name']) ?>" class="event-img">
                            <?php else: ?>
                                <img src="<?= base_url('public/assets/img/logo-dark (1).png') ?>"
                                    alt="Default Event Image" class="event-img">
                            <?php endif; ?>

                            <div class="event-details">
                                <div class="detail-row">
                                    <strong>Event Name</strong>
                                    <span><?= esc($event['event_name']) ?></span>
                                </div>

                                <div class="detail-row">
                                    <strong>Date</strong>
                                    <span><?= $startDate === $endDate ? $startDate : "$startDate → $endDate" ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="mt-4">No events found for the selected filter.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php $this->endSection(); ?>