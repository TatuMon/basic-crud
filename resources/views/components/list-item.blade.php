@props(['item'])

<tr class="list-item" data-item="{{ $item->id }}">
    <td class="item-status" data-status="{{ $item->status }}"></td>
    <td class="item-name">{{ $item->name }}</td>
    <td class="item-price">{{ $item->price ? '$'.$item->price : $item->price }}</td>
    <td class="item-delete"><i class="far fa-trash-alt delete-item"></i></td>
    <td class="item-edit"><i class="fas fa-pen"></i></td>
</tr>