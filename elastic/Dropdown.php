<h3>Dropdown</h3>
<a href=""></a>
<ul>
   <li>
      <ul>
         <li>tatiyeNetAppDropdown.js </li>
      </ul>
   </li>
</ul>
<table class="table table-hover">
   <tbody>
      <tr>
         <td>

<pre><code class="language-js" >function appDropdown(uid){
  $('#myMenu').tatiyeNetAppDropdown({
    "appkey":uid,
    "container":{
        'Header'      :['feat feat-credit-card','link','deskripsi'],
        'Colom Grid'  :['feat feat-layout','link','deskripsi'],
        'Archive'     :['feat feat-archive','link','deskripsi'],
        'Scrollspy'   :['feat feat-arrow-down-circle','link','deskripsi'],
        'Delet Colom' :['feat feat-trash','link','deskripsi'],
    }
  });
}</code>
</pre>

         </td>
         <td>
            <pre><code class="language-css" >onclick="appDropdown('appDropdown');" id="drop_appDropdown"</code></pre>
            <p><a onclick="appDropdown('appDropdown');" id="drop_appDropdown" href="javascript:void(0);">Demo</a></p>
         </td>
      </tr>
 </tbody>
</table>