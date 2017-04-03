<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
        <ul>
            <li>Phone: $Phone</li>
            <li>Email: $Email</li>
            <li>Department: $Department.Title</li>
            <li>Floor: $Department.Floor</li>
        </ul>
        <% if $Photo %>
            <img src="$Photo.SetWidth(200).Url" class="left" />
        <% end_if %>
	</article>
		$Form
		$CommentsForm
</div>
