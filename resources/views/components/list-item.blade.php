@props(['item'])

<tr class="list-item" id="item-{{ $item->id }}">
    <td class="item-status {{ $item->status }}"></td>
    <td class="item-name">{{ $item->name }}</td>
    <td class="item-price">{{ $item->price }}</td>
    <td class="item-delete"><i class="far fa-trash-alt delete-item"></i></td>
</tr>