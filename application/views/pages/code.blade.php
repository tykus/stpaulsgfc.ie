@layout('layouts.default')

@section('content')
<div class="row">
	<div class="span12">
		<h3>Our Games, Our Code</h3>
		<p>
			Our Games - Our Code, the joint Code of Best Practice in Youth Sport.  This Code has been agreed between the GAA, the Ladies Gaelic Football Association, the Camogie Association, GAA Handball Ireland and the Rounders Council of Ireland. 
		</p>
		<p> 
			The Code replaces all previous Codes and is a mandatory Code of Best Practice for all Gaelic Games Associations in our work with underage players.
		</p>
		<p>
			The Code is also available in Disc format (not printed) from the National Children's Office.
 		</p>
 		<p>
			Gearóid Ó Maoilmhichíl<br/>
			Oifigeach Náisiúnta Leanaí <br />
			National Children's Officer.<br />
			GAA, Croke Park, Dublin 3<br />
		</p>

		<table class="table table-striped">
			<tbody>
				<tr>
					<td>
				      	{{ HTML::link('http://www.gaa.ie/content/documents/publications/child_welfare/Our-Games-Our-Code-Dec-2012.pdf', 'Our Games - Our Code') }}

				      	<small class="muted">7.1MB PDF format</small>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
@endsection