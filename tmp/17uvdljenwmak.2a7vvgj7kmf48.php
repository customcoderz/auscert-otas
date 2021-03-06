<?php echo $this->render($header,$this->mime,get_defined_vars()); ?>

  <?php echo $this->render('views/includes/navigation.htm',$this->mime,get_defined_vars()); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        AusCert Training
        <small>University of Queensland</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-graduation-cap"></i> My Training</li>
      <!--   <li class="active">Here</li> -->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
      <!-- Your Page Content Here -->
      <div class="row">
        <div class="col-md-12">
              <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Training</h3>
                <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="views/dist/img/default-50x50.gif" alt="Product Image"/>
                  </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title" data-toggle="modal" data-target="#training-modal">Task 1 <span class="label label-success pull-right">%60</span></a>
                      <div class="progress-group">
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-green" style="width: 50%"></div>
                            </div>
                      </div>
                    </div>
                </li><!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="views/dist/img/default-50x50.gif" alt="Product Image"/>
                  </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title" data-toggle="modal" data-target="#training-modal">Task 2<span class="label label-info pull-right" >%70</span></a>
                      <div class="progress-group">
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                            </div>
                      </div>
                    </div>
                </li><!-- /.item -->
                 <li class="item">
                  <div class="product-img">
                    <img src="views/dist/img/default-50x50.gif" alt="Product Image"/>
                  </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title" data-toggle="modal" data-target="#training-modal">Task 3 <span class="label label-danger pull-right">%30</span></a>
                      <div class="progress-group">
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-red" style="width: 30%"></div>
                            </div>
                      </div>
                    </div>
                </li><!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="views/dist/img/default-50x50.gif" alt="Product Image"/>
                  </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title" data-toggle="modal" data-target="#training-modal">Task 4<span class="label label-info pull-right">%70</span></a>
                      <div class="progress-group">
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                            </div>
                      </div>
                    </div>
                </li><!-- /.item -->
                 <li class="item">
                  <div class="product-img">
                    <img src="views/dist/img/default-50x50.gif" alt="Product Image"/>
                  </div>
                    <div class="product-info">
                      <a href="javascript::;" class="product-title" data-toggle="modal" data-target="#training-modal">Task 5<span class="label label-danger pull-right">%30</span></a>
                      <div class="progress-group">
                            <div class="progress sm">
                              <div class="progress-bar progress-bar-red" style="width: 30%"></div>
                            </div>
                      </div>
                    </div>
                </li><!-- /.item -->
              </ul>
            </div><!-- /.box-body -->
           <!--  <div class="box-footer text-center">
              <a href="javascript::;" class="uppercase">View All Trainings</a>
            </div> --><!-- /.box-footer -->
          </div><!-- /.box -->

        </div>
      </div>
    </section><!-- /.content -->
  </div><!-- /.content-wrapper -->

    <!-- modal -->
    <div class="modal fade" id="training-modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Task 1</h4>
            </div>
            <div class="modal-body">
                      
          <p>
            This is a welcome message to some one that just signed up to your
            service, you can show some features of your dashboard or links to configuration.
          </p>

            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Start Training</button>
              </div>
        </div>
      </div>
  </div>

<?php echo $this->render($footer,$this->mime,get_defined_vars()); ?>