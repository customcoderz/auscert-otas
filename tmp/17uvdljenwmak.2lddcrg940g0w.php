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
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        <!--   <li class="active">Here</li> -->
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        
        <!-- Your Page Content Here -->
        <div class="row">
           <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">
                    Overview
                  </h3>
                  <div class="box-tools pull-right">
                      <button class="btn btn-box-tool" data-widget="collapse">
                          <i class="fa fa-minus"></i>
                      </button>  
                  </div>
                </div>
                <div class="box-body text-center">
                   <input type="text" class="knob" value="30" data-width="150" data-height="150" data-fgColor="#3c8dbc"/>                     
                    <div class="knob-label">Progress</div>
                </div>
              </div>
             
           </div>
           <div class="col-md-8">
              <!-- Chat box -->
            <div class="box box-success">
              <div class="box-header">
                <h3 class="box-title">Messages</h3>
                <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                  <div class="btn-group" data-toggle="btn-toggle" >
                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                  </div>
                </div>
              </div>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <img src="views/dist/img/user4-128x128.jpg" alt="user image" class="online"/>
                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>
                      Mike Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                  </p>
                  <div class="attachment">
                    <h4>Attachments:</h4>
                    <p class="filename">
                      Theme-thumbnail-image.jpg
                    </p>
                    <div class="pull-right">
                      <button class="btn btn-primary btn-sm btn-flat">Open</button>
                    </div>
                  </div><!-- /.attachment -->
                </div><!-- /.item -->
                <!-- chat item -->
                <div class="item">
                  <img src="views/dist/img/user3-128x128.jpg" alt="user image" class="offline"/>
                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>
                      Alexander Pierce
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                  </p>
                </div><!-- /.item -->
                <!-- chat item -->
              </div><!-- /.chat -->
              <div class="box-footer">
                <div class="input-group">
                  <input class="form-control" placeholder="Type message..."/>
                  <div class="input-group-btn">
                    <button class="btn btn-success">Send</button>
                  </div>
                </div>
              </div>
            </div><!-- /.box (chat box) -->


           </div>
        
        </div>
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
                        <a href="javascript::;" class="product-title">Task 1 <span class="label label-success pull-right">%60</span></a>
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
                        <a href="javascript::;" class="product-title">Task 2<span class="label label-info pull-right">%70</span></a>
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
                        <a href="javascript::;" class="product-title">Task 3 <span class="label label-danger pull-right">%30</span></a>
                        <div class="progress-group">
                              <div class="progress sm">
                                <div class="progress-bar progress-bar-red" style="width: 30%"></div>
                              </div>
                        </div>
                      </div>
                  </li><!-- /.item -->
                </ul>
              </div><!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="javascript::;" class="uppercase">View All Trainings</a>
              </div><!-- /.box-footer -->
            </div><!-- /.box -->

          </div>
        </div>
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

<?php echo $this->render($footer,$this->mime,get_defined_vars()); ?>