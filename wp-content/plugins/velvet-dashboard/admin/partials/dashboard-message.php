<?php
global $wpdb;
$table = $wpdb->prefix . 'velvet_messages';
$messages = $wpdb->get_results("SELECT * FROM $table ORDER BY id DESC");
?>

<h1>Messages</h1>

<table class="wp-list-table widefat striped">
<thead>
<tr>
    <th>Nom</th>
    <th>Email</th>
    <th>Téléphone</th>
    <th>Message</th>
    <th>Reçu le</th>
</tr>
</thead>
<tbody>
<?php foreach($messages as $m): ?>
<tr>
    <td><?= esc_html($m->nom . ' ' . $m->prenom) ?></td>
    <td><?= esc_html($m->email) ?></td>
    <td><?= esc_html($m->telephone) ?></td>
    <td><?= esc_html($m->message) ?></td>
    <td><?= esc_html($m->created_at) ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
