<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full ends-at-half clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li>Manage your collection</li>
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
                <h1><span><span>Manage your collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">
                <h2 class="name">Lambeth Palace Archives</h2>

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul role="tablist" class="nav nav-tabs">
                        <li id="panel-1" role="tab"><a href="" class="active">Find a collection</a></li>
                        <li id="panel-2" role="tab"><a href="">Track your changes</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- SEARCH/BROWSE COLLECTIONS TAB -->
                <div class="clr" role="tabpanel" aria-labelledby="panel-1">
                    <div class="search-box">
                        <div class="breather">
                            <h3>Find an existing collection</h3>
                            <form action="search" method="post">
                                <label for="search-collections">Search a collection</label><input type="search" id="search-collections" name="search-collections">
                                <input type="submit" name="submit" value="Search">
                            </form>
                        </div><!-- end breather -->
                        <div class="option-box">
                            <div class="breather clr">
                                <div class="left-to-right">
                                    <ul class="inline">
                                        <li><span>Collection not in Discovery?</span><a href="add.php" class="discoveryPrimaryCallToActionLink">Add a new collection</a></li>
                                    </ul>
                                </div><!-- end left-to-right -->
                            </div><!-- end breather -->
                        </div><!-- end option-box -->
                    </div><!-- end search-box -->
                    <!-- Search list -->
                    <h4>Showing all collections for Lambeth Palace Archives</h4>
                    <div class="table table-responsive">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th>Ref no</th>
                                <th>Title</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="details.php" title="">Record title</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
                            </tr>
                            <tr>
                                <td><a href="" title="">B10253</a></td>
                                <td><a href="" title="">Record title</a></td>
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
                </div><!-- end tab panel-1 -->

                <!-- TRACK CHANGES TAB -->
                <div class="clr" role="tabpanel" aria-labelledby="panel-2">
                    <h4>Showing collections which have been added, edited or deleted</h4>
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
                            <tr class="row" data-id="1">
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            <tr id="1" class="expanded">
                                <td colspan="3">
                                    <p class="table-title">Collection deleted</p>
                                    <p>You have 5 days left to restore this collection</p>
                                    <button>Restore collection</button>
                                </td>
                            </tr>
                            <tr class="row" data-id="2">
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
                            </tr>
                            <tr id="2" class="expanded">
                                <td colspan="3">
                                    <p class="table-title">Collection deleted</p>
                                    <p>You have 5 days left to restore this collection</p>
                                    <button>Restore collection</button>
                                </td>
                            </tr>
                            <tr class="row" data-id="3">
                                <td>B10253</td>
                                <td>Record title</td>
                                <td>1 Jan 2016</td>
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