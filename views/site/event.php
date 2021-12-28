<section id="page-title-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto text-center">
                <div class="page-title-content">
                    <h1 class="h2">All Event Archive</h1>
                    <p>Alumni Needs enables you to harness the power of your alumni network. Whatever may be the
                        need</p>
                    <a href="#page-content-wrap" class="btn btn-brand smooth-scroll">Let&apos;s See</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== Page Title Area End ==-->

<!--== Gallery Page Content Start ==-->
<section id="page-content-wrap">
    <div class="event-page-content-wrap section-padding">
        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <div class="all-event-list">

			<?php foreach($event as $ev){?>

                        <!-- Single Event Start -->
                        <div class="single-upcoming-event">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="up-event-thumb">
                                        <img src="/web/images/event/<?=$ev['image']?>" class="img-fluid" alt="Upcoming Event">
                                        <h4 class="up-event-date"><?= date_format(date_create($ev['tanggal']),'d F Y');?></h4>
                                    </div>
                                </div>

                                <div class="col-lg-7">
                                    <div class="display-table">
                                        <div class="display-table-cell">
                                            <div class="up-event-text">
                                                <div class="event-countdown">
                                                    <div class="event-countdown-counter" data-date="<?= $ev['tanggal'];?>"></div>
                                                    <p>Remaining</p>
                                                </div>
                                                <h3><a href="single-event.html"><?= $ev['judul'];?></a></h3>
                                                <p><?= $ev['content'];?></p>
                                                <a class="btn btn-brand btn-brand-dark">join with us</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                        </div>
  
            <?php }?>


                    </div>
                </div>
            </div>


            <!-- Pagination End -->
        </div>
    </div>
</section>