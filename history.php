<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full ends-at-half clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collection</a></li>
                    <li>View history</li>
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
                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs">
                        <li><a href="index.php">Find a collection</a></li>
                        <li><a href="add.php">Add a collection</a></li>
                        <li><a href="details.php" class="active">View history</a></li>
                        <li><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->
                <h2>Collections which have been added, edited or deleted</h2>
                    <form class="filter-space" ction="" method="post">
                            <p class="form-spacer">
                                <label for="history-options">Showing</label>
                                <select id="history-options">
                                    <option>All history</option>
                                    <option>Added collections only</option>
                                    <option>Deleted collections only</option>
                                    <option>Restored collections only</option>
                                    <option>Edited collections only</option>
                                </select>
                            </p>
                    </form>

                    <!-- HISTORY LIST -->
                    <div class="item clr">
                        <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                        <p>IAID: <a href="">6d8d9214-b18a-41ab-82cf-01f149be5e33d</a></p>
                        <p>Upload (Excel format) - Requested</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">View</a>
                    </div>
                    <div class="item clr">
                        <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                        <p>IAID: <a href="">3nrg9214-b18a-41ab-8egcf-01f149be5e33d</a></p>
                        <p>Upload (Excel format) - Requested</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">View</a>
                    </div>
                    <div class="item clr">
                        <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                        <p>IAID: <span>20d8d9214-b18a-41ab-82cf-01f149be5e33d</span></p>
                        <p class="deleted">Deleted</p>
                        
                        <div class="details">
                            <ul>
                                <li>Ref no: 0/449</li>
                                <li>Title: Georgie Dale</li>
                                <li>Date: 1918-1928</li>
                                <li>Reason for deletion:</li>
                            </ul>
                        </div>
                        <p class="warning">5 days left to restore this collection</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">Restore</a>
                    </div>
                    <div class="item clr">
                        <p>1 Dec 2015 at 13:02 by Jane Gray</p>
                        <p>IAID: <a href="">6d8d9214-b18a-41ab-82cf-01f149be5e33d</a></p>
                        <p>Download (Excel format) - Requested</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">Download</a>
                    </div>                    
                    <div class="item clr">
                        <p>12 Nov 2015 at 10:24 by Bill Smith</p>
                        <p>IAID: <a href="">930dd9214-b18a-41ab-82cf-01f149be5e33d</a></p>
                        <p>Restored</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">View</a>
                    </div>
                    <div class="item clr">
                        <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                        <p>IAID: <span>20d8d9214-b18a-41ab-82cf-01f149be5e33d</span></p>
                        <p class="deleted">Deleted</p>

                        <div class="details">
                            <ul>
                                <li>Ref no: 0/449</li>
                                <li>Title: Georgie Dale</li>
                                <li>Date: 1918-1928</li>
                                <li>Reason for deletion:</li>
                            </ul>
                        </div>
                        <p class="warning">5 days left to restore this collection</p>
                        <a href="" class="discoveryPrimaryCallToActionLink item-button">Restore</a>
                    </div>

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>