@props(['item'])

<tr class="list-item">
    <td class="item-status {{ $item->status }}"><i class="fas fa-check"></i></td>
    <td class="item-name">{{ $item->name }}</td>
    <td class="item-price">{{ $item->price }}</td>
</tr>