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

                    <!-- SUMMARY BOX -->
                    <div class="search-box" id="details">
                            <div class="detail-container">
                                <div class="breather">
                                    <h2>Collection details</h2>
                                    <div class="table table-responsive">
                                        <table class="condensed">
                                            <tbody>
                                            <tr>
                                                <td class="title">Ref no</td>
                                                <td>0/0432</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Title</td>
                                                <td>HALTON, THOMAS</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Desc</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td class="title">Date</td>
                                                <td>1686</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div><!-- end table-responsive -->
                                </div><!-- end breather -->
                            </div><!--end detail-container -->
                    </div><!-- end search-box -->

                    <div class="option-box">
                        <p>Edit fields in Discovery<br><span class="caption">Recommended for small changes</span></p>
                        <ul class="horizontal">
                            <li><a href="" class="discoveryPrimaryCallToActionLink" id="download">Edit in Discovery</a></li>
                        </ul>
                    </div>


                    <!-- FORMS -->
                    <form class="form" id="delete-form" action="history-delete-confirm.php" method="post">
                        <div class="breather" role="dialog" aria-labelledby="dialogDelete">
                            <h4 id="dialogDelete">Delete this collection</h4>
                            <p class="form-spacer">
                                <label for="reason-deletion">Reason for deletion</label>
                                <select id="reason-deletion">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </p>
                            <div class="button-container">
                                <input type="submit" value="Confirm"/>
                                <a href="" class="cancel" role="button">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>

                    <form class="form" id="download-form" action="details-confirmed.php" method="post">
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
                                <input type="submit" value="Retrieve file"/>
                                <a href="" class="cancel" role="button">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>

                    <form class="form" id="upload-form" action="details-upload.php" method="post">
                        <div class="breather" role="dialog" aria-labelledby="dialogUpload">
                            <h4 id="dialogUpload">Upload a file</h4>

                            <p class="no-margin">Choose a file</p>
                            <input type="file" name="file-input" id="file-input" class="inputfile inputfile-6" accept="image/*"/>
                            <label for="file-input"><span></span><strong>Select file</strong></label>
                            <p class="form-spacer information">
                                <label for="format">Are you using one of our templates?</label>
                                <br>
                                <p class="form-spacer">
                                    <input type="radio" name="subject" value="template-true" id="template-true" checked>
                                    <label for="template-true">Yes</label>
                                </p>
                                <p class="form-spacer">
                                    <input type="radio" name="subject" value="template-false" id="template-false">
                                    <label for="template-false">No</label>
                                </p>
                            </p>

                            <div class="button-container">
                                <input type="submit" value="Continue"/>
                                <a href="" class="cancel" role="button">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!--  end breather -->
                    </form>

                    <!-- RECENT ACTIVITY LIST -->
                    <h4>Recent activity for this collection</h4>
                    <div class="item">
                        <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                        <p>Upload</p>
                    </div>
                    <div class="item">
                        <p>13 Jul 2016 at 13:01 by Bill Smith</p>
                        <p>Upload - <span class="warning">Failed</span></p>
                    </div>
                    <div class="item">
                        <p>1 Jun 2016 at 16:00 by Bill Smith</p>
                        <p>Restored</p>
                    </div>
                    <div class="item">
                        <p>1 Jun 2016 at 15:38 by Bill Smith</p>
                        <p>Deleted</p>
                    </div>
                </div><!-- end tab panel-1 -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>