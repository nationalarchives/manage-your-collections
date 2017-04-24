<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collections</a></li>
                    <li>Add a collection</li>
                </ul>
            </nav>
        </div><!-- end col -->
    </section>
    <section class="row">
        <div class="col starts-at-full clr box min">
            <div class="heading-holding-banner">
                <h1><span><span>Add a collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                 
                 <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li role="menuitem"><a href="index.php">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php" class="active">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <h2>Follow our two-step process</h2>
                    <span role="alert" class="emphasis-block"><span>Your collection was successfully downloaded</span></span>
                    <!-- STEP 1 -->
                    <div class="search-box" id="step-1">
                            <h3>Step 1: Download our blank template</h3>
                            <p>Choose between EAD and Excel format and download the template to your computer</p>
                    </div><!-- end search-box -->

                    <form class="form" id="download-form" action="add-confirm.php" method="post">
                        <div class="breather" role="dialog" aria-labelledby="dialogDownload">
                            <h4 id="dialogDownload">Choose a format</h4>
                            <p class="form-spacer">
                                <input type="radio" name="subject" value="ead" id="ead" checked>
                                <label for="ead">EAD format</label>
                            </p>
                            <p class="form-spacer">
                                <input type="radio" name="subject" value="excel" id="excel">
                                <label for="excel">Excel format</label>
                            </p>
                            <div class="button-container">
                                <input type="submit" value="Download"/>
                                <a href="" class="cancel" role="button">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>


                    <!-- STEP 2 -->
                    <div class="search-box" id="step-2">
                        <h3>Step 2: Upload the completed template</h3>
                        <p>Submit the completed template file to add your collection to Discovery</p>
                    </div><!-- end search-box -->
                </div><!-- end tab panel-1 -->

                <form class="form" id="upload-form" action="upload" method="post">
                    <div class="breather" role="dialog" aria-labelledby="dialogUpload">
                        <h4 id="dialogUpload">Upload a file</h4>
                        <input type="file" name="file-input" id="file-input" class="inputfile inputfile-6"
                               accept="image/*"/>
                        <label for="file-input"><span></span><strong>Choose a file</strong></label>
                        <div class="button-container">
                            <input type="submit" value="Upload"/>
                            <a href="" class="cancel">Cancel</a>
                        </div><!-- end button-container -->
                    </div><!-- end breather -->
                </form>

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>