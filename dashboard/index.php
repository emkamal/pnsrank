<?php include("header.php"); ?>
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <?php include("menu.php"); ?>
            </div>
        </nav>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            <div id="chat-form" class="fixed">
                <div class="chat-inner">
                    <h2 class="chat-header">
                        <a href="javascript:;" class="chat-form-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><i class="fa fa-user"></i>&nbsp; Chat &nbsp;<span class="badge badge-info">3</span></h2>
                    <div id="group-1" class="chat-group">
                        <strong>Favorites</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Verna Morton</small> <span class="badge badge-info">2</span></a><a href="#"><span
                                class="user-status is-online"></span> <small>Delores Blake</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-busy"></span> <small>Nathaniel Morris</small>
                                        <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-idle"></span>
                                            <small>Boyd Bridges</small> <span class="badge badge-info is-hidden">0</span></a><a
                                                href="#"><span class="user-status is-offline"></span> <small>Meredith Houston</small>
                                                <span class="badge badge-info is-hidden">0</span></a></div>
                    <div id="group-2" class="chat-group">
                        <strong>Office</strong><a href="#"><span class="user-status is-busy"></span> <small>
                            Ann Scott</small> <span class="badge badge-info is-hidden">0</span></a><a href="#"><span
                                class="user-status is-offline"></span> <small>Sherman Stokes</small> <span class="badge badge-info is-hidden">
                                    0</span></a><a href="#"><span class="user-status is-offline"></span> <small>Florence
                                        Pierce</small> <span class="badge badge-info">1</span></a></div>
                    <div id="group-3" class="chat-group">
                        <strong>Friends</strong><a href="#"><span class="user-status is-online"></span> <small>
                            Willard Mckenzie</small> <span class="badge badge-info is-hidden">0</span></a><a
                                href="#"><span class="user-status is-busy"></span> <small>Jenny Frazier</small>
                                <span class="badge badge-info is-hidden">0</span></a><a href="#"><span class="user-status is-offline"></span>
                                    <small>Chris Stewart</small> <span class="badge badge-info is-hidden">0</span></a><a
                                        href="#"><span class="user-status is-offline"></span> <small>Olivia Green</small>
                                        <span class="badge badge-info is-hidden">0</span></a></div>
                </div>
                <div id="chat-box" style="top: 400px">
                    <div class="chat-box-header">
                        <a href="#" class="chat-box-close pull-right"><i class="glyphicon glyphicon-remove">
                        </i></a><span class="user-status is-online"></span><span class="display-name">Willard
                            Mckenzie</span> <small>Online</small>
                    </div>
                    <div class="chat-content">
                        <ul class="chat-box-body">
                            <li>
                                <p>
                                    <img src="images/avatar/128.jpg" class="avt" /><span class="user">John Doe</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi Swlabs, we have some comments for you.</p>
                            </li>
                            <li class="odd">
                                <p>
                                    <img src="images/avatar/48.jpg" class="avt" /><span class="user">Swlabs</span><span
                                        class="time">09:33</span></p>
                                <p>
                                    Hi, we're listening you...</p>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-textarea">
                        <input placeholder="Type your message" class="form-control" /></div>
                </div>
            </div>
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">
                            Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-right">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    <div class="clearfix">
                    </div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                    <div id="tab-general">
                        <div id="sum_box" class="row mbl">
                            <div class="col-sm-6 col-md-3">
                                <div class="panel profit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-user"></i>
                                        </p>
                                        <h4 class="value">
                                            <span data-counter="" data-start="10" data-end="50" data-step="1" data-duration="0">
                                            </span><span>/100</span></h4>
                                        <p class="description">
                                            Skor Pelayanan</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 80%;" class="progress-bar progress-bar-success">
                                                <span class="sr-only">80% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel income db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-align-justify"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span><span>/100</span></h4>
                                        <p class="description">
                                            Skor pelayanan rata2</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 60%;" class="progress-bar progress-bar-info">
                                                <span class="sr-only">60% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel task db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-signal"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>215</span></h4>
                                        <p class="description">
                                            Jumlah pelayanan</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 50%;" class="progress-bar progress-bar-danger">
                                                <span class="sr-only">50% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="panel visit db mbm">
                                    <div class="panel-body">
                                        <p class="icon">
                                            <i class="icon fa fa-group"></i>
                                        </p>
                                        <h4 class="value">
                                            <span>128</span></h4>
                                        <p class="description">
                                            Random number</p>
                                        <div class="progress progress-sm mbn">
                                            <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 70%;" class="progress-bar progress-bar-warning">
                                                <span class="sr-only">70% Complete (success)</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<!-- this -->
                        <div class="row mbl">
                            <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="profile">
                                            <div style="margin-bottom: 15px" class="row">
                                                <div class="col-xs-12 col-sm-8">
                                                    <h2>
                                                        John Doe</h2>
                                                    <p>
                                                        <strong>Area Kerja:</strong> Administrasi kependudukan</p>
                                                        <strong>Wilayah Kerja:</strong> Kecamatan Sumenep</p>
                                                    <p>
                                                        <strong>Motto:</strong> <i>Read, out with friends, listen to music, draw and learn
                                                        new things.</i></p>
                                                    <p>
                                                </div>
                                                <div class="col-xs-12 col-sm-4 text-center">
                                                    <figure><img src="images/avatar/128.jpg" alt="" style="display: inline-block" class="img-responsive img-circle"/>
                                                    </figure>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Feedback warga</div>
                                    </div>
                                    <div style="overflow: scroll; max-height: 300px" class="portlet-body">
										<table class="demo-tbl"><!--<item>1</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/arch-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">03/15/2012</p>

                                                    <p class="desc">An arch is a structure that spans a space and supports a load. Arches appeared as early as the 2nd millennium BC in Mesopotamian brick architecture and their systematic use started with the Ancient Romans who were the first to apply the technique to a wide range of structures.</p>

                                                    <span class="like title">Skor pelayanan: 5</span></td>
                                            </tr>
                                            <!--<item>2</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/arch-2.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">03/18/2012</p>

                                                    <p class="desc">Architecture is both the process and product of planning, designing and construction. Architectural works, in the material form of buildings, are often perceived as cultural symbols and as works of art. Historical civilizations are often identified with their surviving architectural achievements.</p>

                                                    <p class="like title">Skor pelayanan: 4</p></td>
                                            </tr>
                                            <!--<item>3</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/autumn-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">01/16/2011</p>

                                                    <p class="desc">Autumn or Fall is one of the four temperate seasons. Autumn marks the transition from summer into winter, in September (Northern Hemisphere) or March (Southern Hemisphere) when the arrival of night becomes noticeably earlier. The equinoxes might be expected to be in the middle of their respective seasons, but temperature lag
                                                        (caused by the thermal latency of the ground and sea) means that seasons appear later than dates calculated from a purely astronomical perspective.</p>

                                                    <p class="like title">Skor pelayanan: 4</p></td>
                                            </tr>
                                            <!--<item>4</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/boats-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">02/24/2000</p>

                                                    <p class="desc">A boat is a watercraft of any size designed to float or plane, to provide passage across water. Usually this water will be inland (lakes) or in protected coastal areas. However, boats such as the whaleboat were designed to be operated from a ship in an offshore environment. In naval terms, a boat is a vessel small enough to be
                                                        carried aboard another vessel (a ship).</p>

                                                    <p class="like title">Skor pelayanan: 1</p></td>
                                            </tr>
                                            <!--<item>5</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/book-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">11/22/2001</p>

                                                    <p class="desc">A book is a set of written, printed, illustrated, or blank sheets, made of ink, paper, parchment, or other materials, usually fastened together to hinge at one side. A single sheet within a book is called a leaf, and each side of a leaf is called a page. A book produced in electronic format is known as an electronic book
                                                        (e-book).</p>

                                                    <p class="like title">Skor pelayanan:  3</p></td>
                                            </tr>
                                            <!--<item>6</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/business-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">02/05/2004</p>

                                                    <p class="desc">A business (also known as enterprise or firm) is an organization engaged in the trade of goods, services, or both to consumers. Businesses are predominant in capitalist economies, where most of them are privately owned and administered to earn profit to increase the wealth of their owners. Businesses may also be not-for-profit or
                                                        state-owned. A business owned by multiple individuals may be referred to as a company, although that term also has a more precise meaning.</p>

                                                    <p class="like title">Skor pelayanan: 2</p></td>
                                            </tr>
                                            <!--<item>7</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/calendar-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">05/08/2003</p>

                                                    <p class="desc">A calendar is a system of organizing days for social, religious, commercial, or administrative purposes. This is done by giving names to periods of time, typically days, weeks, months, and years. The name given to each day is known as a date. Periods in a calendar (such as years and months) are usually, though not necessarily,
                                                        synchronized with the cycle of the sun or the moon.</p>

                                                    <p class="like title">Skor pelayanan: 1</p></td>
                                            </tr>
                                            <!--<item>8</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/car-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">09/01/2007</p>

                                                    <p class="desc">An automobile, autocar, motor car or car is a wheeled motor vehicle used for transporting passengers, which also carries its own engine or motor. Most definitions of the term specify that automobiles are designed to run primarily on roads, to have seating for one to eight people, to typically have four wheels, and to be
                                                        constructed principally for the transport of people rather than goods.</p>

                                                    <p class="like title">Skor pelayanan: 2</p></td>
                                            </tr>
                                            <!--<item>9</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/christmas-1.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">11/12/1998</p>

                                                    <p class="desc">Christmas or Christmas Day is an annual commemoration of the birth of Jesus Christ, celebrated generally on December as a religious and cultural holiday by billions of people around the world. A feast central to the Christian liturgical year, it closes the Advent season and initiates the twelve days of Christmastide. Christmas is
                                                        a civil holiday in many of the world's nations, is celebrated by an increasing number of non-Christians, and is an integral part of the Christmas and holiday season.</p>

                                                    <p class="like title">Skor pelayanan: 2</p></td>
                                            </tr>
                                            <!--<item>10</item>-->
                                            <tr class="tbl-item"><!--<img/>-->
                                                <!--<td class="img"><img src="images/thumbs/christmas-2.jpg" alt="" title=""/></td>
                                                <!--<data></data>-->
                                                <td class="td-block"><p class="date">06/10/1995</p>

                                                    <p class="desc">The Christmas Toy is a 1986 made-for-TV movie by The Jim Henson Company. It originally aired on ABC on December 6, 1986, and was originally sponsored by Kraft Foods. Originally introduced by Kermit The Frog, it was released on VHS format in 1993. In 2008, HIT Entertainment (distributed by Lionsgate) released the special on DVD,
                                                        but edited out Kermit's appearance due to legal issues.</p>

                                                    <p class="like title">Skor pelayanan: 3</p></td>
                                            </tr>
                                        </table>
										<a class="morefeedback" href="feedback.php">lihat lebih lengkap</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mbl">
                            <div class="col-lg-8">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h4 class="mbs">
                                                    Performa Skor</h4>
                                                <p class="help-block">
                                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                                                <div id="area-chart-spline" style="width: 100%; height: 300px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="portlet box">
                                    <div class="portlet-header">
                                        <div class="caption">
                                            Komparasi feedback</div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="pie-with-gradient-fill">
                                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                    </div>
                </div>
                <!--END CONTENT-->
                <!--BEGIN FOOTER-->
                <div id="footer">
                    <div class="copyright">
                        <a href="http://themifycloud.com">2014 © KAdmin Responsive Multi-Purpose Template</a></div>
                </div>
                <!--END FOOTER-->
            </div>
            <!--END PAGE WRAPPER-->
        </div>
    </div>
    <script src="script/jquery-1.10.2.min.js"></script>
    <script src="script/jquery-migrate-1.2.1.min.js"></script>
    <script src="script/jquery-ui.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/bootstrap-hover-dropdown.js"></script>
    <script src="script/html5shiv.js"></script>
    <script src="script/respond.min.js"></script>
    <script src="script/jquery.metisMenu.js"></script>
    <script src="script/jquery.slimscroll.js"></script>
    <script src="script/jquery.cookie.js"></script>
    <script src="script/icheck.min.js"></script>
    <script src="script/custom.min.js"></script>
    <script src="script/jquery.news-ticker.js"></script>
    <script src="script/jquery.menu.js"></script>
    <script src="script/pace.min.js"></script>
    <script src="script/holder.js"></script>
    <script src="script/responsive-tabs.js"></script>
    <script src="script/jquery.flot.js"></script>
    <script src="script/jquery.flot.categories.js"></script>
    <script src="script/jquery.flot.pie.js"></script>
    <script src="script/jquery.flot.tooltip.js"></script>
    <script src="script/jquery.flot.resize.js"></script>
    <script src="script/jquery.flot.fillbetween.js"></script>
    <script src="script/jquery.flot.stack.js"></script>
    <script src="script/jquery.flot.spline.js"></script>
    <script src="script/zabuto_calendar.min.js"></script>
    <script src="script/index.js"></script>
    <!--LOADING SCRIPTS FOR CHARTS-->
    <script src="script/highcharts.js"></script>
    <script src="script/data.js"></script>
    <script src="script/drilldown.js"></script>
    <script src="script/exporting.js"></script>
    <script src="script/highcharts-more.js"></script>
    <script src="script/charts-highchart-pie.js"></script>
    <script src="script/charts-highchart-more.js"></script>
    <!--CORE JAVASCRIPT-->
    <script src="script/main.js"></script>
    <script>        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-145464-12', 'auto');
        ga('send', 'pageview');


</script>
</body>
</html>
