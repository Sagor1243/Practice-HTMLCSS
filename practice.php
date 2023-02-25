<?php 
<?php global $redux_demo?>
<?php echo get_template_directory_uri()?>
<?php echo redux_demo['id']?>
<?php wp_head(); ?>
<?php wp_footer();?>
<?php ?>
register_post_type('id'[
    public => ture
    labels => [
        name => 'notice board',
        Add_new => Add notice
        all items => All Notice
    ]
    supports => [title,media ]
])
register_sidebar([
    name : 'Right Sidebar'
    Description : eita dan dik er sidebar;
    id:right_sidebar;
]);
redux:: setSection($opt_name,[
    'title' => genarel option
    icon => el el flag
]);redux :: setSection($opt_name,[
    title:'layout'
    subsection=> ture ,
    fileds => [
        [
            title => 'Responsive Mode'
            type => button set
            id => bt
            option 
        ]
    ]
])


<hr>

<?php comments_popup_link('no one comment here')?>
<div class="comment-box">
   <?php comments_tempalte();?>

</div>

?>