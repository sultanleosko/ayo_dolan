<div id="heading-breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1><?php echo $blog_detail->judul_blog ?></h1>
            </div>
            <div class="col-md-5">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li><a href="blog.html">Blog</a>
                    </li>
                    <li>Blog post</li>
                </ul>

            </div>
        </div>
    </div>
</div>

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" id="blog-post">
                <p class="text-muted text-uppercase mb-small text-right">By <a href="#"><?php echo $blog_detail->penulis_blog ?></a> | June 20, 2013</p>
                <!--<p class="lead">This is the lead paragraph of the article. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>-->

                <div id="post-content">
                    <p>
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $blog_detail->gambar_blog ?>" class="img-responsive" alt="Example blog post alt">
                    </p>

                    <h2>Header Level 2</h2>

                    <ol>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                    </ol>

                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                            tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.</p>
                    </blockquote>

                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                        <li>Aliquam tincidunt mauris eu risus.</li>
                    </ul>

                    <p>
                        <img src="img/blog.jpg" class="img-responsive" alt="Example blog post alt">
                    </p>

                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean
                        ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt
                        condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros
                        eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

                </div>

                <div id="comments">
                    <h4 class="text-uppercase">2 comments</h4>


                    <div class="row comment">
                        <div class="col-sm-3 col-md-2 text-center-xs">
                            <p>
                                <img src="img/blog-avatar2.jpg" class="img-responsive img-circle" alt="">
                            </p>
                        </div>
                        <div class="col-sm-9 col-md-10">
                            <h5 class="text-uppercase">Julie Alma</h5>
                            <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                            </p>
                        </div>
                    </div>


                    <div class="row comment last">

                        <div class="col-sm-3 col-md-2 text-center-xs">
                            <p>
                                <img src="img/blog-avatar.jpg" class="img-responsive img-circle" alt="">
                            </p>
                        </div>

                        <div class="col-sm-9 col-md-10">
                            <h5 class="text-uppercase">Louise Armero</h5>
                            <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2012 at 12:00 am</p>
                            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="reply"><a href="#"><i class="fa fa-reply"></i> Reply</a>
                            </p>
                        </div>

                    </div>
                    <!-- /.comment -->
                </div>
                <!-- /#comments -->


                <div id="comment-form">

                    <h4 class="text-uppercase">Tinggalkan Komentar</h4>

                    <form>
                        <div class="row">

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Nama <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="required">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="comment">Komentar <span class="required">*</span>
                                    </label>
                                    <textarea class="form-control" id="comment" rows="4"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12 text-right">
                                <button class="btn btn-template-main"><i class="fa fa-comment-o"></i> Post comment</button>
                            </div>
                        </div>


                    </form>

                </div>


            </div>

            <div class="col-md-3">
                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Text widget</h3>
                    </div>

                    <div class="panel-body text-widget">
                        <p>Improved own provided blessing may peculiar domestic. Sight house has sex never. No visited raising gravity outward subject my cottage mr be. Hold do at tore in park feet near my case.
                        </p>

                    </div>
                </div>

                <div class="panel panel-default sidebar-menu">
                    <div class="panel-heading">
                        <h3 class="panel-title">Search</h3>
                    </div>

                    <div class="panel-body">
                        <form role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="panel panel-default sidebar-menu">

                    <div class="panel-heading">
                        <h3 class="panel-title">Kategori</h3>
                    </div>

                    <div class="panel-body">
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="blog.html">Gunung</a>
                            </li>
                            <li class="active"><a href="blog.html">Pantai</a>
                            </li>
                            <li><a href="blog.html">Hotel</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>