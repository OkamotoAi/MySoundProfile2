<x-app-layout>
    <x-slot name="header">
    <h3 class="title m-5">お気に入りした曲一覧</h3>
</x-slot>

<div class="columns">
    <table class="table is-narrow is-hoverable m-5 column is-11">
    <tr>
        <th width=10%>ID</th>
        <th width=45%>曲名</th>
        <th width=45%>アーティスト</th>
    </tr>
    @foreach($all as $row)
    <tr>
            <td><?= $row["music_id"] ?></td>
            <td><?= $row["name"] ?></td>
            <td><?= $row["artist"] ?></td>
        </tr>
        @endforeach
    </table> 

</x-app-layout>
