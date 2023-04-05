<?php if( get_row_layout() == 'b1_table_items' ): ?>

    <?php 
        $title = get_sub_field('title'); 
        $description = get_sub_field('description');
    ?>

    <div class="container-fluid site-component-container b1-table-container">

        <div class="row site-component-row b1-table-row wide">

            <div class="col-12">
                <h2 class="_32 title-text _32 title"><?php echo $title ?></h2>

                <div class="body-text _20 _dark-grey description"><?php echo $description; ?></div>
            </div>

            <?php while(have_rows('b1_table')) : the_row(); 
                $label = get_sub_field('label');
                $file = get_sub_field('file');
                $link = get_sub_field('link');
            ?>
                <div class="col-lg-6 b1-table-column">

                    <?php if($file) : ?>
                        <a href="#" onclick='window.open("<?php echo $file; ?>"); return false;'>
                            <span class="body-text _20"><?php echo $label ?></span>
                            <span class="icon-wrapper file"><i class="fa-solid fa-file-pdf"></i></span>
                        </a>
                    <?php endif; ?>

                    <?php if($link) : ?>
                        <a href="<?php echo $link ?>" target="__blank">
                            <span class="body-text _20"><?php echo $label ?></span>
                            <span class="icon-wrapper link"><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                        </a>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>

        </div>
    </div>

<?php endif; ?>