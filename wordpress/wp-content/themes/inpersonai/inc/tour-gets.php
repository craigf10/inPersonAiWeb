    <!-- Get Images -->

    <?php $tourId = get_field("tour_id"); ?>

    <?php
      $request = wp_remote_get( "https://yourtourservice.azurewebsites.net/api/tour/$tourId/public" );
      if( is_wp_error( $request ) ) {
        return false; // Bail early
      }
      $body = wp_remote_retrieve_body( $request );
      $data = json_decode( $body );

      $reviewsRequest = wp_remote_get( "https://yourtourservice.azurewebsites.net/api/reviews/tour/$data->id" );
      if( is_wp_error( $reviewsRequest ) ) {
        return false; // Bail early
      }
      $reviewsBody = wp_remote_retrieve_body( $reviewsRequest );
      $reviewsData = json_decode( $reviewsBody );
    ?>

    <?php function current_url () {
      $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      $validURL = str_replace("&","&amp;",$url);

      return $validURL;
    }?>

    <?php function get_initials ($fname) {
        $words = explode(" ", $fname);
        $initials = "";

        if (count($words) > 0) {
          $initials .= $words[0][0];
        }
        if (count($words) > 1) {
          $initials .= $words[count($words)-1][0];
        }

        return $initials;
    }?>

    <meta property="fb:app_id"             content="289085771609196" />
    <meta property="og:title"              content="<?php echo $data->name ?>" />
    <meta property="og:description"        content="<?php echo $data->description?>" />
    <meta property="og:image"              content="https://yourtourservice.azurewebsites.net/api/image/<?php echo $data->cover->imageId;?>" />