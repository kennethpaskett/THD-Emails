<apex:component access="global">
<apex:attribute name="sectionHeaderText" description="Section Header" type="String" />
<apex:attribute name="headerDivider" description="Header Divider" type="String" />
<apex:attribute name="headerDividerM" description="Header Mobile Divider" type="String" />
<apex:attribute name="itemOneIcon" description="First list item's icon" type="String" />
<apex:attribute name="itemOneText" description="First list item's text" type="String" />
<apex:attribute name="itemOneLink" description="First list item's hyperlink" type="String" />
<apex:attribute name="itemTwoIcon" description="Second list item's icon" type="String" />
<apex:attribute name="itemTwoText" description="Second list item's text" type="String" />
<apex:attribute name="itemTwoLink" description="Second list item's hyperlink" type="String" />
<apex:attribute name="itemThreeIcon" description="Third list item's icon" type="String" />
<apex:attribute name="itemThreeText" description="Third list item's text" type="String" />
<apex:attribute name="itemThreeLink" description="Third list item's hyperlink" type="String" />

<!--================================== START BULLETED LINK LIST COMPONENT ====================================================================-->
<tr>
    <td valign="top">
        <table class="wrapper" align="center" border="0" cellpadding="0" cellspacing="0"
            style="Margin: 0 auto; width:600px;" width="600">
            <tr>
                <td height="40"
                    style="height: 40px; mso-line-height-rule: exactly; line-height: 100%; font-size: 40px;"></td>
            </tr>
            <tr>
                <td valign="top">
                    <table class="wrapper" align="left" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width:100%">
                        <tr>
                            <th class="mob_stack" valign="top" width="100%">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width: 100%;" width="100%">
                                    <!--======================= START SECTION HEADER =====================================-->
                                    <tr style="border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                        <td class="mso_text" align="left" valign="top" height="25"
                                            style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; height: 25px; mso-line-height-rule: exactly; font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:22px; line-height: 100%; color:#000000; font-weight:normal;">
                                            {!sectionHeaderText}</td>
                                    </tr>
                                    <tr>
                                        <td height="5"
                                            style="height: 5px; mso-line-height-rule: exactly; line-height: 100%; font-size: 5px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr height="3" valighn="top"
                                        style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly">
                                        <td class="hide" valign="top"
                                            style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; width: 600px; height: 3px; line-height:100%; font-size: 3px"
                                            height="3"><img src="{!HeaderDivider}" allign="left" width="600"
                                                class="fluid" />
                                        </td>
                                    </tr>
                                    <!--[if !mso]><!-- -->
                                    <tr style="max-height: 0px; overflow: hidden;display:none;float:left;border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; height: 3px; line-height:100%; font-size: 3px" class="show">
                                        <th valign="top">
                                            <img src="{!HeaderDividerM}" style=" height: 3px;" height="3" class="fluid" />
                                        </th>
                                    </tr>
                                    <!--<![endif]-->
                                    <tr>
                                        <td height="25"
                                            style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <!--======================= END SECTION HEADER =====================================-->
                                    <!--======================= START ITEM ONE =====================================-->
                                    <tr>
                                        <td valign="top" width="100%">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                style="margin: 0 auto;">
                                                <tr>
                                                    <td class="mso_text" align="left" valign="top"
                                                        style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; width: 45px; max-width: 45px;"
                                                        width="45">
                                                        <img src="{!itemOneIcon}" style="height: 31px;" height="31" class="fluid" />                                                     
                                                    </td>
                                                    <td valign="middle">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td class="mso_text" align="center" valign="top"
                                                                    style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                                    <a href="{!itemOneLink}" style="color: #464646; text-decoration: none;"><span style="color: #3675b6; text-decoration: none;">{!itemOneText}</span></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--======================= END ITEM ONE =====================================-->
                                    <tr>
                                        <td height="10"
                                            style="height: 10px; mso-line-height-rule: exactly; line-height: 100%; font-size: 10px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <!--======================= START ITEM TWO =====================================-->
                                    <tr>
                                        <td valign="top">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                style="margin: 0;">
                                                <tr>
                                                    <td class="mso_text" align="left" valign="top"
                                                        style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; width: 45px; max-width: 45px;"
                                                        width="45">
                                                        <img src="{!itemTwoIcon}" style="height: 31px;" height="31" class="fluid" />                                                                
                                                    </td>
                                                    <td valign="middle">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td class="mso_text" align="center" valign="top"
                                                                    style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                                    <a href="{!itemTwoLink}" style="color: #464646; text-decoration: none;"><span style="color: #3675b6; text-decoration: none;">{!itemTwoText}</span></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--======================= END ITEM TWO =====================================-->
                                    <tr>
                                        <td height="10"
                                            style="height: 10px; mso-line-height-rule: exactly; line-height: 100%; font-size: 10px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <!--======================= START ITEM THREE =====================================-->
                                    <tr>
                                        <td valign="top">
                                            <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                style="margin: 0;">
                                                <tr>
                                                    <td class="mso_text" align="left" valign="top"
                                                        style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; width: 45px; max-width: 45px;"
                                                        width="45">
                                                        <img src="{!itemThreeIcon}" style="height: 31px;" height="31" class="fluid" />                                                                 
                                                    </td>
                                                    <td valign="middle">
                                                        <table align="left" border="0" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td class="mso_text" align="center" valign="top"
                                                                    style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                                    <a href="{!itemThreeLink}" style="color: #464646; text-decoration: none;"><span style="color: #3675b6; text-decoration: none;">{!itemThreeText}</span></a>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <!--======================= END ITEM THREE =====================================-->
                                </table>
                            </th>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="40"
                    style="height: 40px; mso-line-height-rule: exactly; line-height: 100%; font-size: 40px;">&nbsp;</td>
            </tr>
        </table>
    </td>
</tr>
<!--================================== END BULLETED LINK LIST COMPONENT ====================================================================-->
</apex:component>