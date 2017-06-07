<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container navigation">
    <h3>Edit a song</h3>
    <form class="form-inline" role="form" action="<?php echo URL_WITH_INDEX_FILE; ?>songs/updatesong" method="POST">
            <div class="form-group">
            <label for="artist">Artist</label>
            <input class="form-control" autofocus type="text" id="artist" name="artist" value="<?php echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label for="track">Track</label>
            <input class="form-control" type="text" id="track" name="track" value="<?php echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label for="link">Link</label>
            <input class="form-control" type="text" id="link" name="link" value="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>" />
            <input class="form-control" type="hidden" id="song_id" name="song_id" value="<?php echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input class="form-control" type="submit" name="submit_update_song" class="btn btn-default" value="Update" />
            <a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>

