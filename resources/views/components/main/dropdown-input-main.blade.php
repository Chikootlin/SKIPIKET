<select 
    name="{{ $name }}"  
    class="ml-4 bg-white shadow-sm rounded-lg px-8 py-1 text-[#2C3278] text-lg" 
    onchange="window.location='?week=' + this.value"
>
    @for ($i = 1; $i <= 4; $i++)
        <option value="{{ $i }}" {{ $selected == $i ? 'selected' : '' }}>
            Week {{ $i }}
        </option>
    @endfor
</select>