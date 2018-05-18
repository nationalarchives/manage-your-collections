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
        <div class="col starts-at-full clr box main">
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

                    <h2>Map your fields to Discovery</h2>
                    <p>If the field names in your catalogue data are not the same as the ones we use in Discovery, we
                        need to know how to match – or ‘map’ – your fields to ours.</p>
                    <p>Tell us which fields in Discovery correspond to the fields in your catalogue data.</p>
                    <p>You can create a new mapping, or reuse one that you have created previously.</p>
                    <p><span class="mandatory">* = required fields</span></p>
                    <div class="feature-utilities-header">
                        <form action="details-upload-mapper.php" method="post">
                            <p class="form-spacer">
                                <label for="history-options">How would you like to map your fields?</label>
                                <select id="history-options">
                                    <option>Create a new mapping</option>
                                    <option>Matt's metadata schema 1</option>
                                    <option>Matt's metadata schema 2</option>
                                </select>
                                <input type="submit" class="button" value="Continue">
                            </p>
                        </form>
                    </div>



        </div><!-- end tab panel-1 -->
        </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>