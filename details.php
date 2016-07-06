<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full ends-at-half clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collection</a></li>
                    <li>Edit a collection</li>
                </ul>
            </nav>
        </div><!-- end col -->
        <div class="col starts-at-full ends-at-half clr">
            <nav id="page-controls">
                <ul>
                    <li>
                        <a href="http://www.nationalarchives.gov.uk/help/discovery-help.htm" target="_blank"
                           onclick="dcsMultiTrack('DCS.dcsuri','/SearchHelp', 'WT.ti', 'Search Help', 'WT.cg_n', 'Search Help', 'WT.dl','0');"
                           id="helpLink">
                            Discovery help
                        </a>
                    </li>
                    <a href="/sign-in" id="bookmarkLink">Bookmark</a>
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
                <h2 class="name">Lambeth Palace Archives</h2>
                <nav id="tabs-alternative" class="clr">
                    <!-- Tabs -->
                    <ul role="tablist" class="nav nav-tabs">
                        <li id="panel-1" role="tab"><a href="" class="active">Find a collection</a></li>
                        <li id="panel-2" role="tab"><a href="">Track your changes</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                <div class="clr" role="tabpanel" aria-labelledby="panel-1">

                    <!-- SUMMARY BOX -->
                    <h3>Collection details</h3>
                    <span class="emphasis-block"><span>Your collection was successfully uploaded</span></span>
                    <div class="search-box" id="details">
                        <div class="breather">
                            <div class="table table-responsive">
                                <table class="condensed">
                                    <tbody>
                                    <tr>
                                        <td class="title">Ref no</td>
                                        <td>B10253</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Title</td>
                                        <td>Canon H. Davies to Rev V. Holcroft</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Desc</td>
                                        <td>This is a description</td>
                                    </tr>
                                    <tr>
                                        <td class="title">Date</td>
                                        <td>1918-1928</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->
                        </div><!-- end breather -->
                    </div><!-- end search-box -->

                    <!-- FORMS -->
                    <form class="form" id="delete-form" action="delete" method="post">
                        <div class="breather">
                            <h4>Delete this collection</h4>
                            <p class="form-spacer">
                                <label for="reason-deletion">Reason for deletion</label>
                                <select id="reason-deletion">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                </select>
                            </p>
                            <div class="button-container">
                                <input type="submit" value="Confirm"/>
                                <a href="" class="cancel">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>
                    <form class="form" id="download-form" action="download" method="post">
                        <div class="breather">
                            <h4>Download a file</h4>
                            <p class="form-spacer">
                                <input type="radio" name="subject" value="ead" id="ead">
                                <label for="ead">EAD format</label>
                            </p>
                            <p class="form-spacer">
                                <input type="radio" name="subject" value="excel" id="excel">
                                <label for="excel">Excel format</label>
                            </p>
                            <div class="button-container">
                                <input type="submit" value="Download"/>
                                <a href="" class="cancel">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>
                    <form class="form" id="upload-form" action="upload" method="post">
                        <div class="breather">
                            <h4>Upload a file</h4>
                            <input type="file" name="file-input" id="file-input" class="inputfile inputfile-6"
                                   accept="image/*"/>
                            <label for="file-input"><span></span><strong>Choose a file</strong></label>
                            <div class="button-container">
                                <input type="submit" value="Upload"/>
                                <a href="" class="cancel">Cancel</a>
                            </div><!-- end button-container -->
                        </div><!-- end breather -->
                    </form>

                    <!-- RECENT ACTIVITY LIST -->
                    <h4>Recent activity for this collection</h4>
                    <div class="table table-responsive">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th>Ref no</th>
                                <th>Title</th>
                                <th>Date submitted</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>B10253</td>
                                <td>Record title rtetrterretretret</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            <tr>
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            <tr>
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            <tr>
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                </div><!-- end tab panel-1 -->

                <!-- TRACK CHANGES TAB -->
                <div class="clr" role="tabpanel" aria-labelledby="panel-2">
                    <h3>Showing collections which have been added, edited or deleted</h3>
                    <div class="table table-responsive">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th>Ref no</th>
                                <th>Title</th>
                                <th>Date submitted</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                                <td><a href="" title="">1 Jan 2016</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                                <td><a href="" title="">1 Jan 2016</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                                <td><a href="" title="">1 Jan 2016</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                                <td><a href="" title="">1 Jan 2016</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div><!-- end table-responsive -->
                    <div class="paginationWrapper manage-collections">
                        <ul class="pagination">
                            <li class="current"><span>1</span></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href="">5</a></li>
                            <li><a href="">6</a></li>
                            <li><a href="">7</a></li>
                            <li><a href="">8</a></li>
                            <li><a href="">9</a></li>
                            <li class="next"><a href="">Next</a></li>
                        </ul>
                    </div><!-- end paginationWrapper -->
                </div><!-- end tab panel-2 -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>