<?php if (!defined('APPLICATION')) exit(); ?>
<h1>Vanilla Forums Contributor Agreement</h1>
<div class="Legal">
	<p>These terms apply to your contribution of materials to a product or project
	owned or managed by us ('project'), and set out the intellectual property rights
	you grant to us (Vanilla Forums Inc) in the contributed materials.  If this
	contribution is on behalf of a company, the term 'you' will also mean the
	company for which you are making the contribution. If you agree to be bound by
	these terms, check the box below.</p>
	
	<p>Read this agreement carefully before agreeing.</p>
	
	<ol>
		<li>The term 'contribution' means any source code, object code, patch, tool,
		sample, graphic, specification, manual, documentation, or any other material
		posted or submitted by you to a project.</li>
		<li>With respect to any worldwide copyrights, or copyright applications and
		registrations, in your contribution:
			<ul>
				<li>you hereby assign to us joint ownership, and to the extent that
				such assignment is or becomes invalid, ineffective or unenforceable,
				you hereby grant to us a perpetual, irrevocable, non-exclusive,
				worldwide, no-charge, royalty-free, unrestricted license to exercise
				all rights under those copyrights. This includes, at our option, the
				right to sublicense these same rights to third parties through multiple
				levels of sublicensees or other licensing arrangements;</li>
				<li>you agree that each of us can do all things in relation to your
				contribution as if each of us were the sole owners, and if one of us
				makes a derivative work of your contribution, the one who makes the
				derivative work (or has it made) will be the sole owner of that
				derivative work;</li>
				<li>you agree that you will not assert any moral rights in your
				contribution against us, our licensees or transferees;</li>
				<li>you agree that we may register a copyright in your contribution and
				exercise all ownership rights associated with it; and</li>
	
				<li>you agree that neither of us has any duty to consult with, obtain
				the consent of, pay or render an accounting to the other for any use or
				distribution of your contribution.</li>
			</ul>
		</li>
		<li>With respect to any patents you own, or that you can license without
		payment to any third party, you hereby grant to us a perpetual, irrevocable,
		non-exclusive, worldwide, no-charge, royalty-free license to:
			<ul>
				<li>make, have made, use, sell, offer to sell, import, and otherwise
				transfer your contribution in whole or in part, alone or in combination
				with or included in any product, work or materials arising out of the
				project to which your contribution was submitted, and</li>
				<li>at our option, to sublicense these same rights to third parties
				through multiple levels of sublicensees or other licensing
				arrangements.</li>
			</ul>
	
		</li>
		<li>Except as set out above, you keep all right, title, and interest in your
		contribution. The rights that you grant to us under these terms are effective
		on the date you first submitted a contribution to us, even if your submission
		took place before the date you sign these terms. Any contribution we make
		available under any license will also be made available under a suitable
		FSF (Free Software Foundation) or OSI (Open Source Initiative) approved
		license.</li>
		<li>With respect to your contribution, you represent that:
			<ul>
				<li>it is an original work and that you can legally grant the rights
				set out in these terms;</li>
				<li>it does not to the best of your knowledge violate any third party's
				copyrights, trademarks, patents, or other intellectual property rights;
				and</li>
				<li>you are authorized to sign this contract on behalf of your company
				(if you are making the contribution on behalf of a company).</li>
	
			</ul>
		</li>
		<li>These terms will be governed by the laws of the Province of Quebec and
		applicable Canadian Federal law.  Any choice of law rules will not apply.</li>
	</ol>
	<?php
	echo $this->Form->Open();
	echo $this->Form->CheckBox('Agree', 'By checking this box you agree to the terms listed above', array('value' => '1'));
	echo '<div style="padding: 8px 0;">';
	echo $this->Form->Close('Submit');
	echo '</div>';
	?>
</div>