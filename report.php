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
                        <li role="menuitem"><a href="index.php">Find a collection</a></li>
                        <li role="menuitem"><a href="add.php">Add a collection</a></li>
                        <li role="menuitem"><a href="history.php" class="active">View history</a></li>
                        <li role="menuitem"><a href="help.php">Help</a></li>
                    </ul>
                </nav><!-- end tabs-alternative -->

                <!-- Search list -->
                <h2>Validation report</h2>
                <span role="alert" class="emphasis-block">Failed on 12 December 2016 at 12:02pm</span>
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
                            <th class="x-small"></th>
                            <th class="x-small">Row</th>
                            <th class="medium">Column name</th>
                            <th>Problem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>IAID</td>
                            <td>The value must be unique and 39 characters long <br><small>Example format: 30dd879c-ee2f-11db-8314-0800200c9a66</small></td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>204</td>
                            <td>IAID</td>
                            <td>The field must not be empty</td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>PIAID</td>
                            <td>The field must not be empty</td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Level of description</td>
                            <td>The value must be one of the following: <br><small>Fonds, sub-fonds, sub-sub-fonds</small></td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Level of description</td>
                            <td>The field must not be empty</td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Title</td>
                            <td>The value must not be longer that 2,048 characters <br><small>We recommend that the value should be less than 1,024 characters</small></td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Name of Creator(s)</td>
                            <td>The field must not be empty <i>(fonds level)</i></td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Scope and content</td>
                            <td>The value must not be longer that 32,767 characters</td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Reference code</td>
                            <td>The field must not be empty <i>(fonds level)</i></td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>Start date</td>
                            <td>The value should be between 750 and 2025</td>
                        </tr>
                        <tr>
                            <td><span class="marked">Error</span></td>
                            <td>66</td>
                            <td>End date</td>
                            <td>The value should be between 750 and 2025</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Name of Creator(s)</td>
                            <td>The value should be less than ??? characters</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Reference code</td>
                            <td>The field must not be empty <i>(file level)</i></td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Reference code</td>
                            <td>The field must not be empty <i>(item level)</i></td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Reference code</td>
                            <td>The value should be less than ??? characters</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Covering dates</td>
                            <td>The value should be less than ??? characters</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Covering dates</td>
                            <td>The value should be a year <br><small>Example format: 1948</small></td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>End date</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Extent</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Physical characteristics</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Dimensions</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Language</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Former reference</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Conditions governing access</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Dimensions</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Subjects</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Legal status</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Accruals</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Administrative/biographical history</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Finding aids</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Publication note</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Related units of description</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Immediate source of acquisition</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Arrangement</td>
                            <td>Missing field</td>
                        </tr>
                        <tr>
                            <td><span class="highlight">Warning</span></td>
                            <td>66</td>
                            <td>Note</td>
                            <td>Missing field</td>
                        </tr>
                        </tbody>
                    </table>
                </div><!-- end table-responsive -->

            </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>