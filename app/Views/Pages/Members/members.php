<?php $this->extend('layout/main-layout'); ?>

<?php $this->section('content'); ?>

<style>
    .search-form {
        display: flex;
        justify-content: center;
    }

    .search-input {
        height: 56px;
        border: 2px solid #e5e7eb;
        border-right: none;
        border-radius: 30px 0 0 30px;
        padding-left: 20px;
        font-size: 16px;
        transition: all 0.3s ease;
    }

    .search-input:focus {
        border-color: #00c48c;
        outline: none;
        box-shadow: 0 0 0 2px rgba(0, 196, 140, 0.2);
    }

    .search-btn {
        height: 56px;
        background-color: #00c48c;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 0 30px 30px 0;
        padding: 0 30px;
        font-size: 17px;
        letter-spacing: 0.5px;
        transition: background-color 0.3s ease;
    }

    .search-btn:hover {
        background-color: #00a676;
    }

    .member-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
        padding: 20px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .member-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.12);
    }

    .member-image {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
        border: 3px solid #f0f0f0;
    }

    .member-details h5 {
        margin: 0;
        font-weight: 600;
        font-size: 18px;
    }

    .member-details p {
        margin: 3px 0;
        color: #555;
        font-size: 14px;
    }

    .member-details {
        width: 100%;
        text-align: left;
    }

    .member-details .detail-row {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 4px 0;
        font-size: 14px;
        color: #555;
    }

    .member-details .detail-row strong {
        flex: 0 0 120px;
        text-align: left;
        margin-left: 10px;
        position: relative;
    }

    .member-details .detail-row strong::after {
        content: ":";
        margin-left: 5px;
        font-weight: 600;
    }

    .member-details .detail-row span {
        flex: 1;
        text-align: left;
    }

    .no-results {
        text-align: center;
        font-size: 18px;
        color: #777;
        margin-top: 40px;
    }

    .pagination-container {
        display: inline-block;
    }

    .pagination-btn {
        background: #f3f4f6;
        border: none;
        color: #333;
        padding: 8px 14px;
        margin: 0 4px;
        border-radius: 6px;
        font-size: 15px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .pagination-btn:hover:not(.active):not(:disabled) {
        background: #00c48c;
        color: #fff;
    }

    .pagination-btn.active {
        background: #00c48c;
        color: #fff;
        font-weight: 600;
    }

    .pagination-btn:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }

    .results-title {
        font-size: 24px;
        font-weight: 700;
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }
</style>

<main>
    <div class="team-area pt-60 pb-60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7 col-md-10 col-sm-10">
                    <div class="section-tittle section-tittle2 text-center mb-70">
                        <h2 class="mt-2">Members</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 col-md-10">
                    <form id="memberSearchForm" class="search-form">
                        <div class="input-group">
                            <input type="text" id="searchQuery" name="query" class="form-control search-input"
                                placeholder="Search members..." required>
                            <button type="submit" class="btn search-btn">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <div id="memberResults" class="row justify-content-center">
                <div class="col-lg-10 text-center text-muted">
                    <p>Enter a name, mobile, or member code to search.</p>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById("memberSearchForm");
        const resultsContainer = document.getElementById("memberResults");
        let members = [];
        let currentPage = 1;
        const perPage = 9; 

        function renderResults() {
            resultsContainer.innerHTML = "";

            if (members.length === 0) {
                resultsContainer.innerHTML = `<div class='col-lg-10 no-results'>No members found.</div>`;
                return;
            }

            const start = (currentPage - 1) * perPage;
            const end = start + perPage;
            const paginatedMembers = members.slice(start, end);

            let html = `<div class="col-12"><h4 class="results-title">Search Results (${members.length})</h4></div>`;

            paginatedMembers.forEach(member => {
                const image = member.profile_image ?
                    "<?= base_url('uploads/members/') ?>" + member.profile_image :
                    "<?= base_url('public/assets/img/user.png') ?>";
                const name = [member.first_name, member.middle_name, member.last_name].filter(Boolean).join(" ");

                html += `
                    <div class="col-lg-4 col-md-6 mb-4 d-flex">
                        <div class="member-card w-100">
                            <img src="${image}" class="member-image" alt="Profile Image">
                            <div class="member-details">
                                <div class="detail-row"><strong>Name</strong><span>${name}</span></div>
                                <div class="detail-row"><strong>Membership Code</strong><span>${member.member_code ?? '-'}</span></div>
                                <div class="detail-row"><strong>Mobile Number</strong><span>${member.mobile ?? '-'}</span></div>
                                <div class="detail-row"><strong>Email</strong><span>${member.email ?? '-'}</span></div>
                                <div class="detail-row"><strong>Zone Name</strong><span>${member.zone_name ?? '-'}</span></div>
                            </div>
                        </div>
                    </div>
                `;
            });

            resultsContainer.innerHTML = html + renderPagination();
            addPaginationListeners();
        }

        function renderPagination() {
            const totalPages = Math.ceil(members.length / perPage);
            if (totalPages <= 1) return "";

            let paginationHTML = `<div class="col-12 text-center mt-3"><div class="pagination-container">`;

            paginationHTML += `<button class="pagination-btn prev" ${currentPage === 1 ? "disabled" : ""}>Prev</button>`;

            if (currentPage > 3) {
                paginationHTML += `<button class="pagination-btn" data-page="1">1</button>`;
                if (currentPage > 4) paginationHTML += `<span style="padding:0 5px;">…</span>`;
            }

            for (let i = currentPage - 2; i <= currentPage + 2; i++) {
                if (i > 0 && i <= totalPages) {
                    paginationHTML += `<button class="pagination-btn ${i === currentPage ? "active" : ""}" data-page="${i}">${i}</button>`;
                }
            }

            if (currentPage < totalPages - 2) {
                if (currentPage < totalPages - 3) paginationHTML += `<span style="padding:0 5px;">…</span>`;
                paginationHTML += `<button class="pagination-btn" data-page="${totalPages}">${totalPages}</button>`;
            }

            paginationHTML += `<button class="pagination-btn next" ${currentPage === totalPages ? "disabled" : ""}>Next</button>`;
            paginationHTML += `</div></div>`;

            return paginationHTML;
        }


        function addPaginationListeners() {
            document.querySelectorAll(".pagination-btn").forEach(btn => {
                btn.addEventListener("click", () => {
                    if (btn.classList.contains("prev") && currentPage > 1) currentPage--;
                    else if (btn.classList.contains("next") && currentPage < Math.ceil(members.length / perPage)) currentPage++;
                    else if (btn.dataset.page) currentPage = parseInt(btn.dataset.page);
                    renderResults();
                });
            });
        }

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const query = document.getElementById("searchQuery").value.trim();

            if (!query) return;

            resultsContainer.innerHTML = "<p class='text-center'>🔍 Searching...</p>";

            fetch("<?= base_url('public/search') ?>?query=" + encodeURIComponent(query))
                .then(response => response.json())
                .then(data => {
                    if (data.status && data.data.length > 0) {
                        members = data.data;
                        currentPage = 1;
                        renderResults();
                    } else {
                        resultsContainer.innerHTML = `<div class='col-lg-10 no-results'>No members found for "<strong>${query}</strong>"</div>`;
                    }
                })
                .catch(err => {
                    console.error(err);
                    resultsContainer.innerHTML = "<p class='text-center text-danger'>Error searching members. Please try again.</p>";
                });
        });
    });
</script>

<?php $this->endSection(); ?>