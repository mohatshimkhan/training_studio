<?php $__env->startSection('content'); ?>

    <!-- ***** Features Item Start ***** -->
   
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Choose <em>Program</em></h2>
                        <img src="<?php echo e(asset('frontend/assets/images/line-dec.png')); ?>" alt="waves">
                        <p>Training Studio is free CSS template for gyms and fitness centers. You are allowed to use this layout for your business website.</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">

                        <?php $__currentLoopData = $firstThreeProgrames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ftPrograme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo e(asset('frontend/assets/images/features-first-icon.png')); ?>" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $ftPrograme->title; ?></h4>
                                <p><?php echo $ftPrograme->summary; ?></p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>

                <div class="col-lg-6">
                    <ul class="features-items">
                        
                        <?php $__currentLoopData = $nextThreeprogrames; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ntPrograme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="<?php echo e(asset('frontend/assets/images/features-first-icon.png')); ?>" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4><?php echo $ntPrograme->title; ?></h4>
                                <p><?php echo $ntPrograme->summary; ?></p>
                                <a href="#" class="text-button">Discover More</a>
                            </div>
                        </li>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </div>
                
            </div>
        </div>
    </section>
    
    <!-- ***** Features Item End ***** -->

    <!-- ***** Call to Action Start ***** -->
    
    <section class="section" id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2><?php echo $siteSettings[0]['cta_title']; ?></em>!</h2>
                        <p><?php echo $siteSettings[0]['cta_description']; ?></p>
                        <div class="main-button scroll-to-section">
                            <a href="#our-classes">Become a member</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Our Classes Start ***** -->
    
    <section class="section" id="our-classes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Our <em>Classes</em></h2>
                        <img src="<?php echo e(asset('frontend/assets/images/line-dec.png')); ?>" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                <?php $i=1; ?>
                <?php $__currentLoopData = $trainingClasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainingClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><a href='#tabs-<?php echo e($i); ?>'><img src="<?php echo e(asset('frontend/assets/images/tabs-first-icon.png')); ?>" alt=""><?php echo $trainingClass['title']; ?></a></li>
                <?php $i++ ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <div class="main-rounded-button"><a href="#">View All Schedules</a></div>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <?php $i=1; ?>
                  <?php $__currentLoopData = $trainingClasses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainingClass): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                  
                    <article id='tabs-<?php echo e($i); ?>'>
                    <img src="<?php echo e(asset('uploads/training_classes/'.$trainingClass['featured_image'])); ?>" alt="First Class">
                    <h4><?php echo $trainingClass['title']; ?></h4>
                    <p><?php echo $trainingClass['description']; ?></p>
                    <div class="main-button">
                    <a href="#">View Schedule</a>
                    </div>
                    </article>
                  
                  <?php $i++ ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </section>
              </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Our Classes End ***** -->
    
    <!-- ***** Schedules Start ***** -->
    
    <section class="section" id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2>Classes <em>Schedule</em></h2>
                        <img src="<?php echo e(asset('frontend/assets/images/line-dec.png')); ?>" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="filters">
                        <ul class="schedule-filter">
                            <li class="active" data-tsfilter="monday">Monday</li>
                            <li data-tsfilter="tuesday">Tuesday</li>
                            <li data-tsfilter="wednesday">Wednesday</li>
                            <li data-tsfilter="thursday">Thursday</li>
                            <li data-tsfilter="friday">Friday</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="schedule-table filtering">
                        <table>
                            <tbody>
                                <?php $__currentLoopData = $classSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="day-time"><?php echo e($classSchedule->training_class_title); ?></td>
                                    <td class="<?php echo e($classSchedule->weekday_1); ?> ts-item show" data-tsmeta="<?php echo e($classSchedule->weekday_1); ?>"><?php echo e($classSchedule->weekday_1_time); ?></td>
                                    <td class="<?php echo e($classSchedule->weekday_2); ?> ts-item" data-tsmeta="<?php echo e($classSchedule->weekday_2); ?>"><?php echo e($classSchedule->weekday_2_time); ?></td>
                                    <td><?php echo e($classSchedule->trainer_name); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ***** Schedules End ***** -->

    <!-- ***** Testimonials Starts ***** -->
    
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Expert <em>Trainers</em></h2>
                        <img src="<?php echo e(asset('frontend/assets/images/line-dec.png')); ?>" alt="">
                        <p>Nunc urna sem, laoreet ut metus id, aliquet consequat magna. Sed viverra ipsum dolor, ultricies fermentum massa consequat eu.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <?php $__currentLoopData = $trainers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trainer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="<?php echo e(asset('uploads/trainers/'.$trainer['featured_image'])); ?>" alt="">
                        </div>
                        <div class="down-content">
                            <span><?php echo $trainer['type']; ?></span>
                            <h4><?php echo $trainer['name']; ?></h4>
                            <p><?php echo $trainer['summary']; ?></p>
                            <ul class="social-icons">
                                <li><a href="<?php echo e($trainer['facebook_url']); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo e($trainer['twitter_url']); ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo e($trainer['linkedin_url']); ?>"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo e($trainer['behance_url']); ?>"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            
        </div>
    </section> 

    <!-- ***** Testimonials Ends ***** -->
    
    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="map">
                      <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="contact-form">
                        <form id="contactUsForm" name="contactUsForm" action="" method="post">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="name" type="text" id="name" placeholder="Your Name*" required=""><p></p>
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required=""><p></p>
                              </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                              <fieldset>
                                <input name="subject" type="text" id="subject" placeholder="Subject"><p></p>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea><p></p>
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="form-submit" class="main-button">Send Message</button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->
    
<?php $__env->stopSection(); ?>



<?php $__env->startSection('customJs'); ?>

<script type="text/javascript">

$("#contactUsForm").submit(function(event){

    event.preventDefault();

    $("button[type=submit]").prop('disabled', true);

    $.ajax({
        url:'<?php echo e(route("frontend.contactus")); ?>',
        type:'post',
        data : new FormData(this),
        dataType: 'json',
        processData: false,
        contentType: false,
        success:function(response){

            $("button[type=submit]").prop('disabled', false);

            if(response['status'] == true){

                //window.location.href='<?php echo e(route("frontend.contactus")); ?>';
                alert(response['messsage']);

                $('#name').val('');
                $('#email').val('');
                $('#subject').val('');
                $('#message').val('');

                return true;

            } else {

                var errors = response['errors'];

                if(errors['name']){
                    $('#name').addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['name']);
                } else {
                    $('#title').removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');
                }

                if(errors['email']){
                    $('#email').addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['email']);
                } else {
                    $('#email').removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');
                }

                if(errors['subject']){
                    $('#subject').addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['subject']);
                } else {
                    $('#subject').removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');
                }

                if(errors['message']){
                    $('#message').addClass('is-invalid')
                    .siblings('p')
                    .addClass('invalid-feedback')
                    .html(errors['message']);
                } else {
                    $('#message').removeClass('is-invalid')
                    .siblings('p')
                    .removeClass('invalid-feedback')
                    .html('');
                }

            }

        }, error:function(jqXHR, exception){
            console.log("Something went wrong");
        }
    });


});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp\www\mp\LARAV\training_studio\resources\views/frontend/index.blade.php ENDPATH**/ ?>