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
        <?php include 'controls.php'; ?>
    </section>
    <section class="row">
        <div class="col starts-at-full clr box">
            <div class="heading-holding-banner">
                <h1><span><span>Manage your collection</span></span></h1>
            </div><!-- end heading-holding-banner -->
            <div class="breather">

                <!-- TABBED NAVIGATION -->
                <nav id="tabs-alternative" class="clr">
                    <ul class="nav-tabs" role="menu">
                        <li><a href="index.php">Find a collection</a></li>
                        <li><a href="add.php">Add a collection</a></li>
                        <li><a href="history.php" class="active">View history</a></li>
                        <li><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- Search list -->
                <h2>Validation report</h2>
                <span role="alert" class="emphasis-block">Failed on 12 December 2016 at 12:02pm</span></span>
                <div class="search-box">
                    <div class="detail-container">
                        <div class="breather">
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
                                    </tbody>
                                </table>
                            </div><!-- end table-responsive -->
                        </div><!-- end breather -->
                    </div><!--end detail-container -->
                </div><!-- end search-box -->
                <h3>12 errors/54 warnings</h3>
                <p>All errors must be resolved. Warnings can be fixed to improve the quality of your data.</p>
                <div class="table table-responsive">
                    <table class="striped">
                        <thead>
                        <tr>
                            <th>Line</th>
                            <th>Error</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="marked">Error</span></td>
                        </tr>
                        <tr>
                            <td>204</td>
                            <td>Missing field <span class="marked">Error</span></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="marked">Error</span></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="marked">Error</span></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="highlight">Warning</span></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="highlight">Warning</span></td>
                        </tr>
                        <tr>
                            <td>66</td>
                            <td>Missing field <span class="highlight">Warning</span></td>
                        </tr>

                        </tbody>
                    </table>
                </div><!-- end table-responsive -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>