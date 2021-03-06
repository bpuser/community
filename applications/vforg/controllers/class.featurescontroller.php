<?php if (!defined('APPLICATION')) exit();
/*
Copyright 2008, 2009 Vanilla Forums Inc.
This file is part of Garden.
Garden is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
Garden is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
You should have received a copy of the GNU General Public License along with Garden.  If not, see <http://www.gnu.org/licenses/>.
Contact Vanilla Forums Inc. at support [at] vanillaforums [dot] com
*/

class FeaturesController extends VFOrgController {
   
   public function Index($FeaturePageName = '') {
      $ViewLocation = FALSE;
      
      $Redirects = array(
//          'embed-vanilla' => 'http://vanillaforums.com/features',
          'mobile' => 'http://vanillaforums.com/features/mobile',
          'social-connect' => 'http://vanillaforums.com/features/social-media',
          'themes' => 'http://vanillaforums.com/features/custom-theme',
          'banner' => 'http://vanillaforums.com/features/user-experience',
          'file-upload' => 'http://vanillaforums.com/features/user-experience',
          'import-tool' => 'http://vanillaforums.com/resources/migration',
          'vanilla-connect' => 'http://vanillaforums.com/features/single-sign-on'
      );
      
      if (isset($Redirects[$FeaturePageName]))
         Redirect($Redirects[$FeaturePageName]);
      else
         Redirect('http://vanillaforums.com/features');
      
      
      try {
         $ViewLocation = $this->FetchViewLocation($FeaturePageName);
      } catch (Exception $e) {
         // nothing
      }
      if ($ViewLocation && $FeaturePageName != '')
         $this->View = $FeaturePageName;
      else
         Redirect('features/embed-vanilla/');


      $this->AddJsFile('jquery.js');
      
      $this->Render();
   }

}