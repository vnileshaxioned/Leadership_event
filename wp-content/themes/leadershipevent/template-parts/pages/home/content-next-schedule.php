<?php
  $title = get_sub_field('title');

  if ($title) { ?>
  <section class="next-schedules">
    <div class="wrapper">
      <?php $title ? $title : null; ?>
      <ul class="schedule-tabs">
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day one</h5>
          <span class="schedule-date">July 12, 2022</span>
        </li>
        <li class="schedule-tab-list schedule-tab-active">
          <h5 class="schedule-tab-heading">Day two</h5>
          <span class="schedule-date">July 14, 2022</span>
        </li>
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day three</h5>
          <span class="schedule-date">July 16, 2022</span>
        </li>
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day four</h5>
          <span class="schedule-date">July 18, 2022</span>
        </li>
      </ul>
      <ul class="schedule-post">
        <li class="schedule-post-list">
          <figure class="schedule-image">
            <img src="<?php echo get_template_directory_uri().'/assets/images/schedule/people-smiling-while-conference-room.jpg'; ?>" alt="People Smiling" />
          </figure>
          <div class="schedule-post-content">
            <h5 class="medium-content-heading">Building a famous company</h5>
            <p class="paragraph">Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna. Class aptent taciti sociosqu ad litora torquent per conubia.</p>
            <ul class="schedule-info">
              <li class="schedule-info-list">
                <figure class="schedule-info-image">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/avatar/pretty-smiling-joyfully-female-with-fair-hair-dressed-casually-looking-with-satisfaction.jpg'; ?>" alt="Smiling Joyfully Female" />
                </figure>
                <div class="schedule-content">
                  <h6 class="schedule-content-heading">Isabella</h6>
                  <p class="schedule-paragraph">Event manager</p>
                </div>
              </li>
              <li class="schedule-info-list">
                <span class="schedule-duration">9:00 - 9:45 am</span>
              </li>
              <li class="schedule-info-list">
                <span class="schedule-room">Conference hall 2</span>
              </li>
            </ul>
          </div>
        </li>
        <li class="schedule-post-list">
          <figure class="schedule-image">
            <img src="<?php echo get_template_directory_uri().'/assets/images/schedule/jason-goodman-bzqU01v-G54-unsplash.jpg'; ?>" alt="Jason Goodman" />
          </figure>
          <div class="schedule-post-content">
            <h5 class="medium-content-heading">Dev Ops life in corporate</h5>
            <p class="paragraph">Quisque mollis, ante non semper ultricies, nulla sapien sollicitudin augue, id scelerisque nunc turpis nec urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
            <ul class="schedule-info">
              <li class="schedule-info-list">
                <figure class="schedule-info-image">
                  <img src="<?php echo get_template_directory_uri().'/assets/images/avatar/indoor-shot-beautiful-happy-african-american-woman-smiling-cheerfully-keeping-her-arms-folded-relaxing-indoors-after-morning-lectures-university.jpg'; ?>" alt="Asian woman" />
                </figure>
                <div class="schedule-content">
                  <h6 class="schedule-content-heading">Samantha</h6>
                  <p class="schedule-paragraph">TOP LEVEL SPEAKER</p>
                </div>
              </li>
              <li class="schedule-info-list">
                <span class="schedule-duration">10:00 - 10:45 am</span>
              </li>
              <li class="schedule-info-list">
                <span class="schedule-room">100-a room</span>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>
<?php } ?>