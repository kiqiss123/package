<h3>Inside Outside Click</h3>
<ul>
   <li>
      <ul>
         <li>tatiyeNetApponClick.js</li>
         <li>tatiyeNetApponClickModal.js</li>
      </ul>
   </li>
</ul>
<table class="table table-hover">
   <tbody>
      <tr>
         <td>AppInside</td>
         <td>pengunaan tharf</td>
         <td><per><code class="language-css">AppInside('{content_Exsampel}','key','results');</code></per></td>
         <td><a onclick="AppInside('{content_Exsampel}','key','results');" href="javascript:void(0);">Demo</a></td>
      </tr>
      <tr>
         <td></td>
         <td></td>
         <td><per><code class="language-css">AppInside('demo_MTU1','key','results');</code></per></td>
         <td><a onclick="AppInside('demo_MTU1','key','results');" href="javascript:void(0);">Demo</a></td>
      </tr>
      <tr>
         <td>AppModalKey </td>
         <td>pengunaan Modal Dialog Atau AppInside (Outside )</td>
         <td><per><code class="language-css">AppModalKey('demo_MTU1','key');</code></per></td>
         <td><a onclick="AppModalKey('demo_MTU1','key');" href="javascript:void(0);">Demo</a></td>
      </tr>

      <tr>
         <td> </td>
         <td></td>
         <td><per><code class="language-css">AppModalKey('{content_Exsampel}','key','header Titel','100x500x400x300');</code></per></td>
         <td><a onclick="AppModalKey('{content_Exsampel}','key','header Titel','100x500x400x300');" href="javascript:void(0);">Demo</a></td>
      </tr>
      <tr>
         <td> </td>
         <td></td>
         <td><per><code class="language-css">AppModalKey('{content_Exsampel}','key','header Titel');</code></per></td>
         <td><a onclick="AppModalKey('account/gridSystem/header','key','header Titel2');" href="javascript:void(0);">Demo</a></td>
      </tr>

   <tr>
         <td>Penerapan Kode key </td>
         <td></td>
         <td>
            <per><code class="language-css">
            var myToken= setToken({ id:1, package:'demo', data:'demo/data/header' })
            AppModalKey('{content_Exsampel}',myToken,'header Titel');
         </code></per>
         </td>
         <td>
            <a onclick="AppModalKey('account/gridSystem/header',myToken,'header Titel2');" href="javascript:void(0);">Demo</a></td>
      </tr>
   </tbody>
</table>