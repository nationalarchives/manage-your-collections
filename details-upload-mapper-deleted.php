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

                <h2>Map your fields to Discovery</h2>
                <span role="alert" class="emphasis-block error-issue"><span>Your mapping was successfully deleted.</span></span>
                <p>If the field names in your catalogue data are not the same as the ones we use in Discovery, we
                    need to know how to match – or ‘map’ – your fields to ours.</p>
                <p>Tell us which fields in Discovery correspond to the fields in your catalogue data.</p>
                <p>You can create a new mapping, or reuse one that you have created previously.</p>
                <div class="single-container">
                    <form action="#" method="post">
                        <p class="form-spacer">
                            <label for="history-options">How would you like to map your fields?</label>
                            <select id="history-options">
                                <option>Create a new mapping</option>
                                <option>Matt's metadata schema 1</option>
                                <option>Matt's metadata schema 2</option>
                            </select>
                            <input type="submit" class="button" value="Select">
                        </p>
                    </form>
                </div>

                <div id="map-container">
                    <div class="grid-within-grid-three-item clr" id="mapping">
                        <div id="discovery-fields"><!-- start grid one -->
                            <h3><span>1</span> Select a Discovery field</h3>
                            <p class="help-text">Required fields</p>
                            <div class="data-item">
                                <input type="radio" id="level_of_description" name="discovery_field"
                                       value="Level of description">
                                <label for="level_of_description" class="required">Level of description</label>
                                <div class="definition" id="def_level_of_description">
                                    <p>The position of the material in the collection's hierarchy.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="title" name="discovery_field" value="Title">
                                <label for="title" class="required">Title</label>
                                <div class="definition" id="def_title">
                                    <p>The name of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="name_of_creator" name="discovery_field"
                                       value="Name of creator(s)">
                                <label for="name_of_creator" class="required">Name of creator(s)</label>
                                <div class="definition" id="def_name_of_creator">
                                    <p>The name of the originating organisation(s) or individual(s).</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="scope_and_content" name="discovery_field"
                                       value="Scope and content">
                                <label for="scope_and_content" class="required">Scope and content</label>
                                <div class="definition" id="def_scope_and_content">
                                    <p>A summary description of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="reference_code" name="discovery_field"
                                       value="Reference code">
                                <label for="reference_code" class="required">Reference code</label>
                                <div class="definition" id="def_reference_code">
                                    <p>The unique reference code of the material.</p>
                                </div>
                            </div>
                            <p class="help-text">Provide either covering dates OR a start/end date</p>
                            <div class="data-item">
                                <input type="radio" id="covering_dates" name="discovery_field"
                                       value="Covering dates">
                                <label for="covering_dates">Covering dates</label>
                                <div class="definition" id="def_covering_dates">
                                    <p>Known or estimated dates of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="start_date" name="discovery_field" value="Start date">
                                <label for="start_date">Start date</label>
                                <div class="definition" id="def_start_date">
                                    <p>The earliest year/date for the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="end_date" name="discovery_field" value="End date">
                                <label for="end_date">End date</label>
                                <div class="definition" id="def_end_date">
                                    <p>The last year/date for the material.</p>
                                </div>
                            </div>
                            <p class="help-text">Optional fields</p>
                            <div class="data-item">
                                <input type="radio" id="extent" name="discovery_field"
                                       value="Extent">
                                <label for="extent">Physical characteristics</label>
                                <div class="definition" id="def_extent">
                                    <p>The physical or logical extent of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="physical_characteristics" name="discovery_field"
                                       value="Physical characteristics">
                                <label for="physical_characteristics">Physical characteristics</label>
                                <div class="definition" id="def_physical_characteristics">
                                    <p>A description of any significant conditions or access requirements.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="dimensions" name="discovery_field" value="Dimensions">
                                <label for="dimensions">Dimensions</label>
                                <div class="definition" id="def_dimensions">
                                    <p>The measurements of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="language" name="discovery_field" value="Language">
                                <label for="language">Language</label>
                                <div class="definition" id="def_language">
                                    <p>The language of the material if not English.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="former_reference" name="discovery_field"
                                       value="Former referemce">
                                <label for="former_reference">Former reference</label>
                                <div class="definition" id="def_former_reference">
                                    <p>Any previous unique reference codes for the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="conditions_governing_access" name="discovery_field"
                                       value="Conditions governing access">
                                <label for="conditions_governing_access">Conditions governing access</label>
                                <div class="definition" id="def_conditions_governing_access">
                                    <p>Access restrictions or regulations for the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="subjects" name="discovery_field" value="Subjects">
                                <label for="subjects">Subjects</label>
                                <div class="definition" id="def_subjects">
                                    <p>Any classification terms in the form of keywords or phrases.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="legal_status" name="discovery_field" value="Legal status">
                                <label for="legal_status">Legal status</label>
                                <div class="definition" id="def_legal_status">
                                    <p>Is the material a Public Record as defined by the Public Records Act 1958 and its
                                        schedules (and other Public Records and Freedom of Information Acts)?</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="accruals" name="discovery_field" value="Accruals">
                                <label for="accruals">Accruals</label>
                                <div class="definition" id="def_accruals">
                                    <p>Are further additions to the material expected? How often?</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="administrative_history" name="discovery_field"
                                       value="Administrative/Biographical history">
                                <label for="administrative_history">Administrative/Biographical history</label>
                                <div class="definition" id="def_administrative_history">
                                    <p>Information about the creator(s) of the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="finding_aids" name="discovery_field" value="Finding aids">
                                <label for="finding_aids">Finding aids</label>
                                <div class="definition" id="def_finding_aids">
                                    <p>Identify any existing finding aids for the material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="publication_note" name="discovery_field"
                                       value="Publication note">
                                <label for="publication_note">Publication note</label>
                                <div class="definition" id="def_publication_note">
                                    <p>Identify any publications based on the material, including online or hard copy.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="related_units" name="discovery_field"
                                       value="Related units of description">
                                <label for="related_units">Related units of description</label>
                                <div class="definition" id="def_related_units">
                                    <p>Any collections known to be related material.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="source_of_acquisition" name="discovery_field"
                                       value="Immediate source of acquisition">
                                <label for="source_of_acquisition">Immediate source of acquisition</label>
                                <div class="definition" id="def_source_of_acquisition">
                                    <p>The source from which the material was acquired.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="arrangement" name="discovery_field" value="Arrangement">
                                <label for="arrangement">Arrangement</label>
                                <div class="definition" id="def_arrangement">
                                    <p>How is the material organised?</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="note" name="discovery_field" value="Note">
                                <label for="note">Note</label>
                                <div class="definition" id="def_note">
                                    <p>Record any other relevant background information, for example the name of the
                                        cataloguer.</p>
                                </div>
                            </div>
                        </div><!--end grid one -->
                        <div id="custom-fields"><!-- start grid two -->
                            <h3><span>2</span> Select your field</h3>
                            <p class="help-text">Uploaded from Kenrick.xls</p>
                            <div class="data-item">
                                <input type="radio" id="user_insititution_name" name="user_field"
                                       value="institution.name">
                                <label for="user_insititution_name">institution.name</label>
                                <div class="definition" id="def_user_insititution_name">
                                    <p>Black Country Living Museum</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_institution_code" name="user_field"
                                       value="institution.code">
                                <label for="user_institution_code">institution.code</label>
                                <div class="definition" id="def_user_institution_code">
                                    <p>1430</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_object_number" name="user_field" value="object_number">
                                <label for="user_object_number">object_number</label>
                                <div class="definition" id="def_user_object_number">
                                    <p>KEN</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_title" name="user_field" value="title">
                                <label for="user_title">title</label>
                                <div class="definition" id="def_user_title">
                                    <p>Archibald Kenrick & Sons Limited</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_production_date_start" name="user_field"
                                       value="production.date.start">
                                <label for="user_production_date_start">production.date.start</label>
                                <div class="definition" id="def_user_production_date_start">
                                    <p>1670</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_production_date_end" name="user_field"
                                       value="production.date.end">
                                <label for="user_production_date_end">production.date.end</label>
                                <div class="definition" id="def_user_production_date_end">
                                    <p>1990</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_physical_description" name="user_field"
                                       value="physical_description">
                                <label for="user_physical_description">physical_description</label>
                                <div class="definition" id="def_user_physical_description">
                                    <p>The records of Archibald Kenrick & Sons consist of administration records, financial
                                        & accounting records, printed material, photographs and plans/maps/drawings. The
                                        company's administration records and printed material records, due to their size,
                                        have been further divided into mixed correspondence, land & property, certificates,
                                        employees, licences, newspapers/magazines, books & booklets and
                                        leaflets/posters/flyers.</p>
                                    <p>The collection is a useful source for the study of the iron founding industry of the
                                        Black Country as well as for the history of iron founding in general.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_collection" name="user_field" value="collection">
                                <label for="user_collection">collection</label>
                                <div class="definition" id="def_user_collection">
                                    <p>Archibald Kenrick</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_description_level" name="user_field"
                                       value="description_level">
                                <label for="user_description_level">description_level</label>
                                <div class="definition" id="def_user_description_level">
                                    <p>Fonds</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_dimension_free" name="user_field"
                                       value="dimension.free">
                                <label for="user_dimension_free">dimension.free</label>
                                <div class="definition" id="def_user_dimension_free">
                                    <p>28 boxes</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_parts_reference" name="user_field"
                                       value="parts_reference">
                                <label for="user_parts_reference">parts_reference</label>
                                <div class="definition" id="def_user_parts_reference">
                                    <p>KEN/A</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_object_history_note" name="user_field"
                                       value="object_history_note">
                                <label for="user_object_history_note">object_history_note</label>
                                <div class="definition" id="def_user_object_history_note">
                                    <p>The collection was retained by Archibald Kenrick & Sons. The records were deposited
                                        on a loan basis in 1990 by Archibald Kenrick & Sons Ltd. for an initial period of
                                        five years. The loan was then converted to a gift in 2006.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_creator" name="user_field" value="creator">
                                <label for="user_creator">creator</label>
                                <div class="definition" id="def_user_creator">
                                    <p>Archibald Kenrick & Sons</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_acquisition_notes" name="user_field"
                                       value="acquisition.notes">
                                <label for="user_acquisition_notes">acquisition.notes</label>
                                <div class="definition" id="def_user_acquisition_notes">
                                    <p>Archibald Kenrick & Sons</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_content_person_name_type" name="user_field"
                                       value="content.person.name.type">
                                <label for="user_content_person_name_type">content.person.name.type</label>
                                <div class="definition" id="def_user_content_person_name_type">
                                    <p>person</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_content_person_name" name="user_field"
                                       value="content.person.name">
                                <label for="user_content_person_name">content.person.name</label>
                                <div class="definition" id="def_user_content_person_name">
                                    <p>Archibald Kenrick</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_content_subject_type" name="user_field"
                                       value="content.subject.type">
                                <label for="user_content_subject_type">content.subject.type</label>
                                <div class="definition" id="def_user_content_subject_type">
                                    <p>subject</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_content_subject" name="user_field"
                                       value="content.subject">
                                <label for="user_content_subject">content.subject</label>
                                <div class="definition" id="def_user_content_subject">
                                    <p>Holloware.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_accruals" name="user_field" value="accruals">
                                <label for="user_accruals">accruals</label>
                                <div class="definition" id="def_user_accruals">
                                    <p>Accruals are unlikely.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_system_of_arrangement" name="user_field"
                                       value="system_of_arrangement">
                                <label for="user_system_of_arrangement">system_of_arrangement</label>
                                <div class="definition" id="def_user_system_of_arrangement">
                                    <p>These records have been arranged into five Series that best reflect the original
                                        order of the collection. The five Series comprise: Administration Records, Financial
                                        & Accounting Records, Printed Material, Photographs and Plans/Drawings/Maps. Due to
                                        their sizes, the company's Administration Records have been further divided into
                                        five Sub-Series levels comprising Mixed Correspondence, Land & Property,
                                        Certificates, Employees and Licences and their Printed Material has been further
                                        divided into three Sub-Series comprising Newspapers & Magazines, Books & Booklets
                                        and Leaflets/Posters/Flyers.</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_access_category_notes" name="user_field"
                                       value="access_category.notes">
                                <label for="user_access_category_notes">access_category.notes</label>
                                <div class="definition" id="def_user_access_category_notes">
                                    <p>Open</p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_environment_condition_notes" name="user_field"
                                       value="environmental_condition.notes">
                                <label for="user_environment_condition_notes">environmental_condition.notes</label>
                                <div class="definition" id="def_user_environment_condition_notes">
                                    <p></p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_part_of_reference" name="user_field"
                                       value="part_of_reference">
                                <label for="user_part_of_reference">part_of_reference</label>
                                <div class="definition" id="def_user_part_of_reference">
                                    <p></p>
                                </div>
                            </div>
                            <div class="data-item">
                                <input type="radio" id="user_part_of_title" name="user_field" value="part_of.title">
                                <label for="user_part_of_title">part_of.title</label>
                                <div class="definition" id="def_user_part_of_title">
                                    <p></p>
                                </div>
                            </div>
                        </div><!-- end grid two -->
                        <div id="matched-fields"><!-- start grid three -->
                            <h3><span>3</span> Match these fields</h3>
                            <div id="match-navigation"><input type="submit" value="Match" id="match"></div>
                            </form>
                            <form action="#" method="post">
                                <h4>Matched fields &nbsp;<a href="">Undo all</a></h4>
                                <ul></ul>
                        </div><!-- end grid three -->
                    </div><!--end grid within grid -->
                    <div class="feature-utilities-footer">
                        <label class="text-field" for="map_name">Mapping name</label>
                        <input type="text" id="map_name" name="map_name" placeholder="Example: london-metropolitan-mapping">
                        <div class="button-container">
                            <input type="submit" value="Submit and continue">
                            <a href="" id="delete-mapping" class="secondary-call">Delete</a>
                        </div>
                    </div>
                    </form>
                    <form class="form" id="delete-mapping-form" action="details-upload-mapper-deleted.php" method="post">
                        <div class="breather" role="dialog" aria-labelledby="dialogUpload">
                            <h4 id="dialogUpload">Delete your mapping</h4>

                            <b class="no-margin">Are you sure you want to delete <b>Matt's metadata mapping 1</b>?</p>

                            <div class="button-container">
                                <input type="submit" value="Yes"/>
                                <a href="" class="cancel" role="button">No</a>
                            </div><!-- end button-container -->
                        </div><!--  end breather -->
                    </form>


            </div><!-- end tab panel-1 -->
        </div><!-- end breather -->
        </div><!-- end col -->
    </section>
<?php include 'footer.php'; ?>