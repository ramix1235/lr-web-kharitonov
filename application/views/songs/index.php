<?php if (!$this) { exit(header('HTTP/1.0 403 Forbidden')); } ?>

<div class="container navigation">
    <div>
        <h3>Add a song</h3>
        <form class="form-inline" role="form" action="<?php echo URL_WITH_INDEX_FILE; ?>songs/addsong" method="POST">
            <div class="form-group">
                <label for="artist">Artist</label>
                <input class="form-control" type="text" id="artist" name="artist" value="" required />
                <label for="track">Track</label>
                <input class="form-control" type="text" id="track" name="track" value="" required />
                <label for="link">Link</label>
                <input class="form-control" type="text" id="link" name="link" value="" />
                <input class="form-control" type="submit" name="submit_add_song" class="btn btn-default" value="Submit" />
            </div>
        </form>
    </div>
    <div>
        <h3>List of songs <small>amount: <?php echo $amount_of_songs; ?></small></h3>
        <table class="table table-striped">
            <thead style="background-color: #ddd; font-weight: bold; font-size: 15px;">
                <tr>
                    <td>Artist</td>
                    <td>Track</td>
                    <td>Link</td>
                    <td>DELETE</td>
                    <td>EDIT</td>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($songs as $song) { ?>
                <tr>
                    <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($song->track)) echo htmlspecialchars($song->track, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>
                        <?php if (isset($song->link)) { ?>
                            <a href="<?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($song->link, ENT_QUOTES, 'UTF-8'); ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL_WITH_INDEX_FILE . 'songs/deletesong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-default">delete</a></td>
                    <td><a href="<?php echo URL_WITH_INDEX_FILE . 'songs/editsong/' . htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?>" class="btn btn-default">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
