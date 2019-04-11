<?php 
function my_admin_init(){
    //権限を取得
    $role = get_role( 'administrator' );
    //権限を追加する
    $role->add_cap( 'delete_others_plans' );
    $role->add_cap( 'delete_plans' );
    $role->add_cap( 'delete_private_plans' );
    $role->add_cap( 'delete_published_plans' );
    $role->add_cap( 'edit_others_plans' );
    $role->add_cap( 'edit_plans' );
    $role->add_cap( 'edit_private_plans' );
    $role->add_cap( 'edit_published_plans' );
    $role->add_cap( 'publish_plans' );
    $role->add_cap( 'read_private_plans' );
}
add_action( 'admin_init', 'my_admin_init' );