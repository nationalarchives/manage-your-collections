<?php include 'header.php'; ?>
    <section class="row" id="holds-breadcrumb">
        <div class="col starts-at-full clr">
            <nav id="breadcrumb">
                <ul>
                    <li><a href="http://www.nationalarchives.gov.uk">Home</a></li>
                    <li><a href="index.php">Manage your collections</a></li>
                    <li>View history</li>
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
                        <li role="menuitem"><a href="index.php">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="details.php" class="active">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- MAIN CONTENT -->
                <h2>Collections which have been added, edited or deleted</h2>
                <span role="alert" class="emphasis-block margin-bottom-large"><span>The following collection has been deleted:<br><small>Ref no: 0/0432, Title: Halton, Thomas</small></span></span>
                <form class="filter-space" action="#" method="post">
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
                    <p>23 May 2018 at 12:35 by Sarra Hamdi</p>
                    <div class="collection upload">
                        <h3>Kenrick.txt - upload in progress</h3>
                        <div class="progress-indicator">
                            <ul>
                                <li class="complete">Virus scanned</li>
                                <li>Fields mapped</li>
                                <li>Data validated</li>
                                <li>Previewed</li>
                                <li>Collection updated</li>
                                <li>Queued for publishing</li>
                            </ul>
                        </div><!-- end progress-indicator -->
                        <a class="button" href="details-upload.php">Map fields to Discovery &gt;</a>
                    </div><!-- end collection -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload ready to check</small></h3>
                        <p>File: GBO8972.xls</p>
                        <a class="button" href="preview.php">Preview and approve</a>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Virus scanned</li>
                            <li class="complete">Fields mapped</li>
                            <li class="complete">Data validated</li>
                            <li>Previewed</li>
                            <li>Collection updated</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Uploaded</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p><a href="">View the collection &gt;</a></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>2 Aug 2016 at 16:18 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload in progress</h3>
                        <p>File: GBO8972.xls</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li>Virus scanned</li>
                            <li>Fields mapped</li>
                            <li>Data validated</li>
                            <li>Previewed</li>
                            <li>Collection updated</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload failed</h3>
                        <p>File: GBO8972.xls</p>
                        <a class="button" href="report.php">See error report</a>
                    </div>
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Virus scanned</li>
                            <li class="complete">Fields mapped</li>
                            <li class="incomplete">Data validated</li>
                            <li>Previewed</li>
                            <li>Collection updated</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div>

                <div class="item clr error-block">
                    <p>10 Jun 2016 at 19:11 by Bill Smith</p>
                    <div class="collection upload">
                        <h3>Upload failed</h3>
                        <p>File: GBO8972.xls</p>
                    </div>
                    <div class="progress-indicator">
                        <p>We had a problem with our system. <a href="">Try uploading your file again &gt;</a></span></p>
                    </div><!-- end progress-indicator -->
                </div>

                <div class="item clr warning-block">
                    <p>1 Dec 2015 at 13:02 by Jane Gray</p>
                    <div class="collection upload">
                        <h3>Upload rejected</h3>
                        <p>File: GBO8972.xls</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Virus scanned</li>
                            <li class="complete">Fields mapped</li>
                            <li class="complete">Data validated</li>
                            <li class="incomplete">Previewed</li>
                            <li>Collection updated</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>12 Nov 2015 at 10:24 by Bill Smith</p>

                    <div class="collection upload">
                        <h3>Upload in progress</h3>
                        <p>File: GBO8972.xls</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Virus scanned</li>
                            <li class="complete">Fields mapped</li>
                            <li class="complete">Data validated</li>
                            <li class="complete">Collection updated</li>
                            <li class="complete">Previewed</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection delete">
                        <h3>Deleted</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                        <a class="button" href="">Restore</a>
                    </div>
                    <div class="progress-indicator">
                        <p>5 days left to restore this collection</p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection delete">
                        <h3>Delete failed</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div>
                    <div class="progress-indicator">
                        <p>We had a problem with our system. <a href="">Try deleting the collection again &gt;</a></span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection download">
                        <h3>Download ready</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                        <a class="button" href="">Download collection</a>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p>Ready for download</p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection download">
                        <h3>Download failed</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p>We had a problem with our system. <a href="">Try requesting your download again &gt;</a></span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restored</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p><a href="">View collection &gt;</a></span></p>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restore in progress</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <ul>
                            <li class="complete">Collection restored</li>
                            <li>Queued for publishing</li>
                        </ul>
                    </div><!-- end progress-indicator -->
                </div><!-- end item -->

                <div class="item clr error-block">
                    <p>1 Apr 2016 at 12:03 by Bill Smith</p>
                    <div class="collection restore">
                        <h3>Restore failed</h3>
                        <p>Ref: 0/0432</p>
                        <p>Title: HALTON, THOMAS</p>
                    </div><!-- end collection -->
                    <div class="progress-indicator">
                        <p>We had a problem with our system. <a href="">Try restoring your collection again &gt;</a></span></p>
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