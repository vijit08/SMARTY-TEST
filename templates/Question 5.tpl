<p>COUNTER</p>
{counter start=0 skip=1}
<br>
{counter}<br>
{counter}<br>
{counter}<br>

{section name=rows loop=$data}
    <tr class="{cycle values="odd,even"}">
        <td>{$data[rows]}</td>
    </tr>
{/section}
