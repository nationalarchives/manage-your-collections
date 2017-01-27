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
            </nav><!-- end page-controls -->
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

                <!-- MAIN CONTENT -->
                <h2>Collections which have been added, edited or deleted</h2>
                <span class="emphasis-block margin-bottom-large"><span>The following collection has been deleted:<br><small>Ref no: 0/0432, Title: Halton, Thomas</small></span></span>
                <form class="filter-space" action="" method="post">
                    <p class="form-spacer">
                        <label for="history-options">Showing</label>
                        <select id="history-options">
                            <option>All history</option>
                            <option>Deleted collections only</option>
                            <option>Added/edited collections only</option>
                        </select>
                        <input type="submit" class="button" value="Filter">
                    </p>
                </form>

                <!-- ITEM LIST -->
                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>

                    <div class="collection">
                        <h3>Deleted</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                        <a class="button" href="">Restore</a>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p><span class="warning">5 days left to restore this collection</span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Dec 2015 at 13:02 by Jane Gray</p>
                    <div class="collection">
                        <h3>Uploading</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li>Virus scanned</li>
                            <li>Data validated</li>
                            <li>Collection updated</li>
                            <li>Previewed</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>12 Nov 2015 at 10:24 by Bill Smith</p>
                    <div class="collection">
                        <h3>Uploading</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li>Virus scanned</li>
                            <li>Data validated</li>
                            <li>Collection updated</li>
                            <li>Previewed</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection">
                        <h3>Deleted</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p><span class="warning">5 days left to restore this collection</span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>