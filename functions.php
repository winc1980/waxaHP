<?php
function meta_box() {
    add_meta_box(
        'my_activity_box',
        '活動内容',
        'my_activity_box',
        'dashboard',
        'normal',
        'default',
    );
    add_meta_box(
        'my_history_box',
        '歴史',
        'my_history_box',
        'dashboard',
        'normal',
        'default',
    );
    add_meta_box(
        'my_sns_box',
        'SNSの設定',
        'my_sns_box',
        'dashboard',
        'normal',
        'default'
    );
}
add_action( 'admin_menu', 'meta_box' );

function my_activity_box() {
?>
    <style>
        #mybox .input-text-wrap {
            margin-bottom: 12px;
        }
        #mybox label {
            display: inline-block;
            margin-bottom: 4px;
        }
        #mybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>
    <form id="mybox" action="" method="post">
        <div class="textarea-wrap">
            <label for="activity">ここへ活動内容を記入してください</label>
            <textarea name="activity_text" rows="5" placeholder="ここへ活動内容を記入してください。"><?php echo get_post_meta( 1, 'activity_text', true ); ?></textarea>
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="activity">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>
<?php
}

function my_history_box() {
    ?>
    <style>
        #mybox .input-text-wrap {
            margin-bottom: 12px;
        }
        #mybox label {
            display: inline-block;
            margin-bottom: 4px;
        }
        #mybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>
    <form id="mybox" action="" method="post">
        <div class="textarea-wrap">
            <label for="history">ここへ歴史を記入してください</label>
            <textarea name="history_text" rows="5" placeholder="ここへ歴史を記入してください。"><?php echo get_post_meta( 1, 'history_text', true ); ?></textarea>
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="history">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>
<?php
}


function my_sns_box() {
?>
    <style>
        #mybox .input-text-wrap {
            margin-bottom: 12px;
        }
        #mybox label {
            display: inline-block;
            margin-bottom: 4px;
        }
        #mybox .submit {
            display: flex;
            width: 100%;
            justify-content: end;
        }
    </style>
    <form id="mybox" action="" method="post">
        <div class="input-text-wrap">
            <label for="instagram_id">Instagram ユーザー名</label>
            <input type="text" id="instagram_id" name="instagram_id" value="<?php echo get_post_meta( 1, 'instagram_id', true ); ?>">
        </div>
        <div class="input-text-wrap">
            <label for="twitter_id">Twitter ユーザー名</label>
            <input type="text" id="twitter_id" name="twitter_id" value="<?php echo get_post_meta( 1, 'twitter_id', true ); ?>">
        </div>
        <div class="submit">
            <input type="hidden" name="submit_type" value="sns">
            <input type="submit" class="button button-primary" value="保存する">
        </div>
    </form>
<?php
}

add_action( 'after_setup_theme', function() {
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'sns' ) {
        update_post_meta( 1, 'instagram_id', $_POST['instagram_id'] );
        update_post_meta( 1, 'twitter_id', $_POST['twitter_id'] );
    }
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'activity' ) {
        update_post_meta( 1, 'activity_text', $_POST['activity_text'] );
    }
    if ( isset( $_POST['submit_type'] ) && $_POST['submit_type'] === 'history' ) {
        update_post_meta( 1, 'history_text', $_POST['history_text'] );
    }
});

?>