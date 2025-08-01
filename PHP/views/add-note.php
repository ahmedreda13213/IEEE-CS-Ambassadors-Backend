<h1>Add Note</h1>

<form action="?page=store-note" method="POST">
    <div>
        <label>Title:</label><br>
        <input type="text" name="title" required>
    </div>
    <br>
    <div>
        <label>Body:</label><br>
        <textarea name="body" rows="5" required></textarea>
    </div>
    <br>
    <button type="submit">Save Note</button>
</form>
