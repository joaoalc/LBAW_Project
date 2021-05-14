<tr class={{ "user" . $user["user_id"]}}>
    <th scope="row" class="d-none d-lg-table-cell">{{ $key + 1 }}</th>
    <td>{{ $user["first_name"] }}</td>
    <td>
         <a class="username-anchor" href={{ "/userProfile/" . $user["user_id"] }}>{{ $user["username"] }} </a>
    </td>
    <td class="d-none d-lg-table-cell">{{ $user["email"] }}</td>
        @if (!$user->isBanned())    
            <td>
                @include("partials.promoteOrBanUserModal",array("user" => $user))
                
            </td>
        @else
            <td>
                @include("partials.unbanUserModal",array("user" => $user))
            </td>        
        @endif
        
</tr>
