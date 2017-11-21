<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collections</a></li>
                    <li>Edit a collection</li>
                </ul>
            </nav>
        </div><!-- end col -->
    </section>
    <section class="row">
        <div class="col starts-at-full clr box">
            <div class="heading-holding-banner">
                <h1><span><span>Edit collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li role="menuitem"><a href="index.php" class="active">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                <div class="clr">
                    <div class="breather">
                        <h2>Upload a file</h2>
                        <div class="search-box upload">
                            <div class="detail-container">
                                <div class="breather">
                                    <form action="" method="post">
                                        <input type="file" name="file-input" id="file-input" class="inputfile inputfile-6" accept="image/*"/>
                                        <label for="file-input"><span></span><strong>Choose a file</strong></label>

                                        <div class="button-container margin-bottom">
                                            <input type="submit" value="Upload"/>
                                        </div><!-- end button-container -->
                                    </form>
                                </div><!-- end breather -->
                            </div><!--end detail-container -->
                        </div><!-- end search-box -->



                        <h3>Map your fields to Discovery - our catalogue</h3>
                        <form class="filter-space">
                            <p class="form-spacer information">
                                    <label for="metadata-map">Choose a saved mapping</label>
                                    <select id="metadata-map">
                                        <option>Matt's metadata schema 1</option>
                                        <option>Matt's metadata schema 2</option>
                                        <option>Create a new mapping</option>
                                    </select>
                            </p>
                        </form>
                        <h4>Your new mapping</h4>
                        <form action="" method="post">
                            <div class="feature-utilities-header clr">
                                <div class="breather">
                                    <label class="text-field" for="map_name">Create a name to save this mapping for future use</label>
                                    <input type="text" id="map_name" name="map_name" placeholder="Example: london-metropolitan-mapping">
                                </div>
                            </div>
                            <div class="grid-within-grid-three-item clr" id="mapping">

                                <div><!-- start grid one -->
                                        <h3><span>1</span> Select a Discovery field</h3>
                                        <div>
                                            <input type="radio" id="legal_status" name="discovery_field" title="">
                                            <label class="selection" for="legal_status">Legal status</label>
                                            <div class="definition" id="legal_status">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="language" name="discovery_field">
                                            <label for="language">Language</label>
                                            <div class="definition" id="language">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="reference" name="discovery_field">
                                            <label for="reference">Reference</label>
                                            <div class="definition" id="reference">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="former_reference_dept" name="discovery_field">
                                            <label for="former_reference_dept">Former reference (department)</label>
                                            <div class="definition" id="former_reference_dept">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="former_reference_pro" name="discovery_field">
                                            <label for="former_reference_pro">Former reference (PRO)</label>
                                            <div class="definition" id="former_reference_pro">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="title" name="discovery_field">
                                            <label for="title">Title</label>
                                            <div class="definition" id="title">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="map_designation" name="discovery_field">
                                            <label for="map_designation">Map designation</label>
                                            <div class="definition" id="map_designation">
                                                <p><br> A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="creator_name" name="discovery_field">
                                            <label for="creator_name">Creator name</label>
                                            <div class="definition" id="creator_name">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="covering_dates" name="discovery_field">
                                            <label for="covering_dates">Covering dates</label>
                                            <div class="definition" id="covering_dates">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="physical_desc_extent" name="discovery_field">
                                            <label for="physical_desc_extent">Physical description, extent</label>
                                            <div class="definition" id="physical_desc_extent">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="physical_desc_form" name="discovery_field">
                                            <label for="physical_desc_form">Physical description, form</label>
                                            <div class="definition" id="physical_desc_form">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="dimensions" name="discovery_field">
                                            <label for="dimensions">Dimensions</label>
                                            <div class="definition" id="dimensions">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="radio" id="dimensions" name="discovery_field">
                                            <label for="map_scale_number">Map scale number</label>
                                            <div class="definition" id="map_scale_number">
                                                <p>A note as to whether the records being described are Public Records or not, as defined by the 1958 Act and its schedules (other Public Records and FOI Acts)</p>
                                            </div>
                                        </div>
                                </div><!--end grid one -->
                                <div><!-- start grid two -->
                                        <h3><span>2</span> Select your field</h3>

                                            <div>
                                                <input type="radio" id="user_legal_status" name="user_field">
                                                <label for="user_legal_status">Legal status</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_language" name="user_field">
                                                <label for="user_language">Language</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_reference" name="user_field">
                                                <label for="user_reference">Reference</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_former_reference_dept" name="user_field">
                                                <label for="user_former_reference_dept">Former reference (department)</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_former_reference_pro" name="user_field">
                                                <label for="user_former_reference_pro">Former reference (PRO)</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_title" name="user_field">
                                                <label for="user_title">Title</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_map_designation" name="user_field">
                                                <label for="user_map_designation">Map designation</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_creator_name" name="user_field">
                                                <label for="user_creator_name">Creator name</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_covering_dates" name="user_field">
                                                <label for="user_covering_dates">Covering dates</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_physical_desc_extent" name="user_field">
                                                <label for="user_physical_desc_extent">Physical description, extent</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_physical_desc_form" name="user_field">
                                                <label for="user_physical_desc_form">Physical description, form</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_dimensions" name="user_field">
                                                <label for="user_dimensions">Dimensions</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="user_map_scale_number" name="user_field">
                                                <label for="user_map_scale_number">Map scale number</label>
                                            </div>
                                    </div><!-- end grid two -->
                                    <div><!-- start grid three -->
                                            <h3><span>3</span> Match these fields</h3>
                                            <input type="submit" value="Match">

                                            <h4>Matched fields &nbsp;<a href="">Undo all</a></h4>


                                            <ul>
                                                <li>Legal status <span>=</span> Legal status <a href="">Undo</a></li>
                                                <li>Description <span>=</span> Description <a href="">Undo</a></li>
                                            </ul>
                                    </div><!-- end grid three -->
                                </div><!--end grid within grid -->
                            <div class="feature-utilities-footer">
                                <input type="submit" value="Save and continue your upload">
                            </div>
                            </form>
                    </div><!-- end breather -->
                </div><!-- end tab panel-1 -->
            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>