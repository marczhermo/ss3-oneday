<% include SideBar %>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<h1>$Title</h1>
		<div class="content">$Content</div>

        <% loop $Children %>
            <p>
                <h2><a href="$Link">$Title</a></h2>
                <em>$Role.Title</em>
            </p>
            <p>
                <% if $Photo %>
                    <a href="$Link">
                    <img src="$Photo.SetWidth(50,50).Url" class="left" />
                    </a>
                <% end_if %>
            </p>
        <% end_loop %>
	</article>
		$Form
		$CommentsForm
</div>
