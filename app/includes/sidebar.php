    <aside id="leftsidebar" class="sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>ISDM</a></li>
            <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Doctor</a></li> -->
        </ul>

        
        <div class="tab-content">
            <div class="tab-pane stretchRight active" id="dashboard">
                <div class="menu">
                    <ul class="list">
                        <li>
                            <div class="user-info">
                                <div class="image"><a href="profil-user"><img src="assets/images/users/<?php echo $_SESSION['user_profil']?>" alt="User"></a></div>
                                <div class="detail">
                                    <h4><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></h4>
                                    <small><?php echo $_SESSION['type_member']; ?></small>                        
                                </div>
                            </div>
                        </li>
                        <li class="header">MAIN</li>
                        <li class="active open"><a href="home"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span></a></li>            
                        <!-- <li><a href="get_choice_spe"><i class="zmdi zmdi-calendar-check"></i><span>Consulter un médecin</span> </a></li> -->

                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Master</span> </a>
                            <ul class="ml-menu">
                                <li><a href="#">Faire son master a l'ISDM</a></li>
                                <li><a href="#">Masters soutenus</a></li>
                                <li><a href="#">Masters en cours</a></li>                      
                                <!-- <li><a href="profile.html">Doctor Profile</a></li>
                                <li><a href="events.html">Doctor Schedule</a></li> -->
                            </ul>
                        </li>

                        <li><a href="all_patients" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Doctorat</span> </a>
                            <ul class="ml-menu">
                                <li><a href="#">Faire sa thèse a l'ISDM</a></li>
                                <li><a href="#">Thèses soutenues</a></li>
                                <li><a href="#">Thèses en cours</a></li>
                                <li><a href="#">Les écoles doctorales</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-label-alt"></i><span>Spécialisation</span> </a>
                            <ul class="ml-menu">
                                <li><a href="add_speciality">Ajouter une specialité</a></li>
                                <li><a href="all_speciality">Liste des specialités</a></li>
                            </ul>
                        </li> -->
                        <!-- <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                            <ul class="ml-menu">
                                <li><a href="widgets-app.html">Apps Widgetse</a></li>
                                <li><a href="widgets-data.html">Data Widgetse</a></li>
                            </ul>
                        </li>  -->
                        <li> <a href="settings"><i class="zmdi zmdi-settings zmdi-hc-spin"></i><span>Paramètre</span> </a>
                            
                        </li> 

                        <?php /*
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-add"></i><span>Doctors</span> </a>
                            <ul class="ml-menu">
                                <li><a href="doctors.html">All Doctors</a></li>
                                <li><a href="add-doctor.html">Add Doctor</a></li>                       
                                <li><a href="profile.html">Doctor Profile</a></li>
                                <li><a href="events.html">Doctor Schedule</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-account-o"></i><span>Patients</span> </a>
                            <ul class="ml-menu">
                                <li><a href="patients.html">All Patients</a></li>
                                <li><a href="add-patient.html">Add Patient</a></li>                       
                                <li><a href="patient-profile.html">Patient Profile</a></li>
                                <li><a href="patient-invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-balance-wallet"></i><span>Payments</span> </a>
                            <ul class="ml-menu">
                                <li><a href="payments.html">Payments</a></li>
                                <li><a href="add-payments.html">Add Payment</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-label-alt"></i><span>Departments</span> </a>
                            <ul class="ml-menu">
                                <li><a href="add-departments.html">Add</a></li>
                                <li><a href="all-Departments.html">All Departments</a></li>
                                <li><a href="javascript:void(0);">Cardiology</a></li>
                                <li><a href="javascript:void(0);">Pulmonology</a></li>
                                <li><a href="javascript:void(0);">Gynecology</a></li>
                                <li><a href="javascript:void(0);">Neurology</a></li>
                                <li><a href="javascript:void(0);">Urology</a></li>
                                <li><a href="javascript:void(0);">Gastrology</a></li>
                                <li><a href="javascript:void(0);">Pediatrician</a></li>
                                <li><a href="javascript:void(0);">Laboratory</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                            <ul class="ml-menu">
                                <li><a href="sign-in.html">Sign In</a> </li>
                                <li><a href="sign-up.html">Sign Up</a> </li>
                                <li><a href="forgot-password.html">Forgot Password</a> </li>
                                <li><a href="404.html">Page 404</a> </li>
                                <li><a href="500.html">Page 500</a> </li>
                                <li><a href="page-offline.html">Page Offline</a> </li>
                                <li><a href="locked.html">Locked Screen</a> </li>
                            </ul>
                        </li>
                        <li class="header">EXTRA COMPONENTS</li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                            <ul class="ml-menu">
                                <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                                <li><a href="blog-post.html">New Post</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Single</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span> </a>
                            <ul class="ml-menu">
                                <li><a href="file-dashboard.html">All File</a></li>
                                <li><a href="file-documents.html" >Documents</a></li>
                                <li><a href="file-media.html">Media</a></li>
                                <li><a href="file-images.html">Images</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                            <ul class="ml-menu">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>                                                        
                                <li><a href="contact.html">Contact list</a></li>                            
                            </ul>
                        </li>                    
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                            <ul class="ml-menu">
                                <li><a href="widgets-app.html">Apps Widgetse</a></li>
                                <li><a href="widgets-data.html">Data Widgetse</a></li>
                            </ul>
                        </li>                    
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                            <ul class="ml-menu">
                                <li><a href="blank.html">Blank Page</a> </li>
                                <li><a href="https://wrraptheme.com/templates/oreo/hospital/html/rtl/index.html">RTL Support</a></li>
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>                            
                                <li><a href="invoice.html">Invoices</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </li>
                        <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                            <ul class="ml-menu">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                                <li><a href="colors.html">Colors</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="list-group.html">List Group</a></li>
                                <li><a href="media-object.html">Media Object</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="notifications.html">Notifications</a></li>                    
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="waves.html">Waves</a></li>
                            </ul>
                        </li>
                        */ ?>
                        <li class="header">Extra</li>
                        <li>
                            <div class="progress-container progress-primary m-t-10">
                                <a target="_blank" href="https://1pub.net/_projets/isdm"><span class="progress-badge">Site Web</span></a>
                               
                            </div>
                            <div class="progress-container progress-info">
                                <span class="progress-badge">Server Load</span>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                        <span class="progress-value">86%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <?php /*
            <div class="tab-pane stretchLeft" id="user">
                <div class="menu">
                    <ul class="list">
                        <li>
                            <div class="user-info m-b-20 p-b-15">
                                <div class="image"><a href="profile.html"><img src="../assets/images/profile_av.jpg" alt="User"></a></div>
                                <div class="detail">
                                    <h4>Dr. Charlotte</h4>
                                    <small>Neurologist</small>                        
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                                        <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                                        <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                                    </div>
                                    <div class="col-4 p-r-0">
                                        <h5 class="m-b-5">18</h5>
                                        <small>Exp</small>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="m-b-5">125</h5>
                                        <small>Awards</small>
                                    </div>
                                    <div class="col-4 p-l-0">
                                        <h5 class="m-b-5">148</h5>
                                        <small>Clients</small>
                                    </div>                                
                                </div>
                            </div>
                        </li>
                        <li>
                            <small class="text-muted">Location: </small>
                            <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <hr>
                            <small class="text-muted">Email address: </small>
                            <p>Charlotte@example.com</p>
                            <hr>
                            <small class="text-muted">Phone: </small>
                            <p>+ 202-555-0191</p>
                            <hr>
                            <small class="text-muted">Website: </small>
                            <p>dr.charlotte.com/ </p>
                            <hr>
                            <ul class="list-unstyled">
                                <li>
                                    <div>Colorectal Surgery</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Endocrinology</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Dermatology</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                    </div>
                                </li>
                                <li>
                                    <div>Neurophysiology</div>
                                    <div class="progress m-b-20">
                                        <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span> </div>
                                    </div>
                                </li>
                            </ul>                        
                        </li>                    
                    </ul>
                </div>
            </div>
            */ ?>
        </div>   
       
    </aside>