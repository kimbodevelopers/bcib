<?php if( get_row_layout() == 'b3_table' ): ?>

    <?php
        $title = get_sub_field('title'); 
        $description = get_sub_field('description');   
    ?>

    <div class="container-fluid site-component-container b3-table-container">
        <div class="row site-component-row b3-table-row small">

            <div class="col-12 b3-table-column">
                <?php if($title) : ?>
                    <h3 class="title-text _33 table-title _semibold"><?php echo $title ?></h3>
                <?php endif; ?>

                <?php if($description) : ?>
                    <div class="body-text _dark-grey _20 description"><?php echo $description; ?></div>
                <?php endif; ?>
            </div>


            <div class="col-12 b3-table-column b3-column">

                <?php 

                    $table = get_sub_field( 'table' );

                    if ( ! empty ( $table ) ) {
                        echo '<table border="0">';
                            if ( ! empty( $table['caption'] ) ) {
                                echo '<caption>' . $table['caption'] . '</caption>';
                            }
                            if ( ! empty( $table['header'] ) ) {
                                echo '<thead>';
                                    echo '<tr>';
                                        foreach ( $table['header'] as $th ) {
                                            echo '<th class="title-text _15">';
                                                echo $th['c'];
                                            echo '</th>';
                                        }
                                    echo '</tr>';
                                echo '</thead>';
                            }

                            echo '<tbody>';
                                foreach ( $table['body'] as $tr ) {
                                    echo '<tr>';
                                        foreach ( $tr as $td ) {
                                            echo '<td class="body-text _17">';
                                                echo $td['c'];
                                            echo '</td>';
                                        }
                                    echo '</tr>';
                                }
                            echo '</tbody>';
                        echo '</table>';
                    }

                ?>

            </div>


        </div>
    </div>
<?php endif; ?>