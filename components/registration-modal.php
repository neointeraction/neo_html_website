<!-- Registration Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <!-- <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register for UX Audit 101</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <div class="contact-container">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="modal-contact">
                                    <button type="button" class="btn-close modal-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    <h2 class="form-title">Send Us Your Enquiry</h2>
                                    <?php if (!empty($error_message)): ?>
                                        <div class="alert alert-danger">
                                            <?php echo htmlspecialchars($error_message); ?>
                                        </div>
                                    <?php endif; ?>

                                    <form method="POST" action="">
                                        <div class="form-group">
                                            <label for="name" class="form-label">Name</label>
                                            <input
                                                type="text"
                                                id="name"
                                                name="name"
                                                class="form-control custom-input"
                                                placeholder="Enter name"
                                                value="<?php echo htmlspecialchars($name ?? ''); ?>"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="work_email" class="form-label">Work email</label>
                                            <input
                                                type="email"
                                                id="work_email"
                                                name="work_email"
                                                class="form-control custom-input"
                                                placeholder="Enter work email"
                                                value="<?php echo htmlspecialchars($work_email ?? ''); ?>"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="mobile_number" class="form-label">Mobile Number</label>
                                            <input
                                                type="tel"
                                                id="mobile_number"
                                                name="mobile_number"
                                                class="form-control custom-input"
                                                placeholder="Enter mobile number"
                                                value="<?php echo htmlspecialchars($mobile_number ?? ''); ?>"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <label for="requirement" class="form-label">Type your requirement</label>
                                            <textarea
                                                id="requirement"
                                                name="requirement"
                                                class="form-control custom-input"
                                                placeholder="Describe project needs (eg, mobile app, website design, website development, UX audit..etc)"
                                                rows="6"
                                                required><?php echo htmlspecialchars($requirement ?? ''); ?></textarea>
                                        </div>
                                        <div class="form-btn-container">
                                            <button type="submit" class="btn btn-custom">
                                                Submit
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>