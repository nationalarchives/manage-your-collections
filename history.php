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
        <?php include 'controls.php'; ?>
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
                <form class="filter-space" action="" method="post">
                    <p class="form-spacer">
                        <label for="history-options">Showing</label>
                        <select id="history-options">
                            <option>All history</option>
                            <option>Added/edited collections only</option>
                            <option>Deleted collections only</option>
                            <option>Restored collections</option>
                            <option>Downloaded collections</option>
                        </select>
                        <input type="submit" class="button" value="Filter">
                    </p>
                </form>

                <!-- ITEM LIST -->
                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload - <small>In progress</small></h3>
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

                <div class="item clr error-block">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload - <small>Failed</small></h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                        <a class="button" href="report.php">See error report</a>
                    </div>
                    <div class="progress-indicator">
                        <p><span class="warning">Upload failed on 12 Dec 2016</span></p>
                    </div><!-- end progress-indicator -->
                </div>

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection delete">
                        <h3>Deleted</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                        <a class="button" href="">Restore</a>
                    </div>
                    <div class="progress-indicator">
                        <p><span class="warning">5 days left to restore this collection</span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr warning-block">
                    <p>1 Dec 2015 at 13:02 by Jane Gray</p>
                    <div class="collection upload">
                        <h3>Upload - <small>Cancelled</small></h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p><span>Upload cancelled on 10 Dec 2016</span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>12 Nov 2015 at 10:24 by Bill Smith</p>

                    <div class="collection upload">
                        <h3>Upload - <small>In progress</small></h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                        <a class="button" href="preview.php">Preview and approve</a>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Virus scanned</li>
                            <li class="complete">Data validated</li>
                            <li class="complete">Collection updated</li>
                            <li>Previewed</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection download">
                        <h3>Download</h3>
                        <p>Ref: <a href="">0/0432</a></p>
                        <p>Title: <a href="">HALTON, THOMAS</a></p>
                        <a class="button" href="">Download collection</a>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p>Ready for download</p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

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

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>