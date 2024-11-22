<apex:component access="global">
    <apex:attribute name="ServiceProviderDividerD" description="Service Provider Divider" type="String" />
    <apex:attribute name="YourInformationDividerD" description="Your Information Divider" type="String" />
    <apex:attribute name="YourInformationDivider2" description="Your Information Divider" type="String" />
    <apex:attribute name="ServiceProviderDividerM" description="Service Provider Mobile Divider" type="String" />
    <apex:attribute name="YourInformationDividerM" description="Your Information Mobile Divider" type="String" />
    <apex:attribute name="YourInformationDividerM2" description="Your Information Mobile Divider" type="String" />
    <apex:attribute name="NameString" description="Name String" type="String" />
    <apex:attribute name="SPName" description="SP Name" type="String" />
    <apex:attribute name="SPemail" description="SP Email" type="String" />
    <apex:attribute name="SPAddress" description="Service Provider Address" type="String" />
    <apex:attribute name="SPPhoneNum" description="Material type" type="String" />
    <apex:attribute name="SPNum1" description="Material type" type="String" />
    <apex:attribute name="SPNum2" description="Material type" type="String" />
    <apex:attribute name="custName" description="Customer first and last name" type="String" />
    <apex:attribute name="Address1" description="Customeraddress" type="String" />
    <apex:attribute name="Address2" description="Customeraddress" type="String" />
    <apex:attribute name="custPhone" description="Customer phone number" type="String" />
    <apex:attribute name="custemail" description="Cutomer Email" type="String" />
    <apex:attribute name="Title" description="Title" type="String" />
    <apex:attribute name="jobDate" description="Job date" type="DateTime"/>
    <apex:attribute name="jobTime" description="Job time" type="String"/>
    
    <!--================================== START SERVICE PROVIDER DETAILS **PLEASE DO NOT TOUCH*** ====================================================================-->

    <tr>
        <td valign="top">
            <table class="wrapper" align="center" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width:600px;" width="590">
                <tr>
                    <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">&nbsp;
                        
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <apex:outputText rendered="{!NameString == 'Raw Lead'}">
                        <table>
                            <th class="mob_stack mob_padL0" valign="top" style="padding:0 0 0 20px; mso-padding-alt:0 0 0 17.5pt;">
                                <table align="Center" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width: 600px;">
                                    
                                    <tr style="border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                        <td class="mso_text" align="center" valign="top" height="25" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; height: 25px; mso-line-height-rule: exactly; font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:22px; line-height: 100%; color:#000000; font-weight:normal;">
                                            Your Information</td>
                                    </tr>
                                    <tr>
                                        <td height="5" style="height: 5px; mso-line-height-rule: exactly; line-height: 100%; font-size: 5px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">&nbsp;
                                            
                                        </td>
                                    </tr>
                                    <tr height="3" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly">
                                        <td class="hide" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; width: 590px; height: 3px; line-height:100%; font-size: 3px"
                                            height="3">
                                            <img src="{!YourInformationDivider2}" allign="left" width="590" class="fluid" />
                                        </td>
                                    </tr>
                                    <!--[if !mso]><!-- -->
                                    <tr style="max-height: 0px; overflow: hidden;display:none;float:left;border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; height: 3px; line-height:100%; font-size: 3px"
                                        class="show">
                                        <th valign="top">
                                            <img src="{!YourInformationDividerM2}" style=" height: 3px;" height="3" class="fluid" />
                                        </th>
                                    </tr>
                                    <!--<![endif]-->
                                    <tr>
                                        <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                            <b>Name:</b> {!custName}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table width="290" align="left" style="height:max-content; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto">
                                    <tr>
                                        <td height="100%" width="auto" valign="TOP" style="vertical-align: top; margin:0 auto; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto">
                                            <table height="100%" valign="TOP" style="vertical-align: top; width:auto !important">
                                                <tr height="100%" valign="TOP" style="vertical-align: top">
                                                    <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top;">
                                                        <b>Address:</b>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td height="100%" width="100%" valign="top" align="left" style="vertical-align: top; margin:0 auto; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto; text-align:left; max-width:120px !important">
                                            <table height="100%" valign="top" align="left" style="vertical-align: top">
                                                <td height="100%" valign="top" align="left" style="vertical-align: top">
                                                    <table height="100%" valign="top" align="left" style="vertical-align: top;">
                                                        <tr height="100%" valign="TOP" style="vertical-align: top;">
                                                            <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top">
                                                                {!Address1}
                                                            </td>
                                                        </tr>
                                                        <tr height="100%" valign="TOP" style="vertical-align: top;">
                                                            <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top">
                                                                {!Address2}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </table>
                                        </td>
                                    </tr>

                                </table>
                                <table>
                                    <tr>
                                        <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                            <b>Phone Number:</b>
                                            <a href="tel:{!custPhone}" style="text-decoration: none; color: #000000;">{!custPhone}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                            
                                        </td>
                                    </tr>
                                </table>
                                <table>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                            <b>Email:</b>
                                            <a href="mailto:{!SPemail}" style="text-decoration: none; color: #000000;">{!custemail}</a>
                                        </td>
                                    </tr>
                                </table>
                            </th>
                        </table>
                        </apex:outputText>
                        <!--BREAK--------------------------------------------------------------------------------------------->
                        <apex:outputText rendered="{!NameString != 'Raw Lead'}">
                        <table align="left" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width:100%">
                            <tr>
                                <th class="mob_stack" valign="top">
                                    <table align="Center" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width: 290px;">
                                        <tr style="border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                            <td class="mso_text" align="center" valign="top" height="25" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; height: 25px; mso-line-height-rule: exactly; font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:22px; line-height: 100%; color:#000000; font-weight:normal;">
                                                {!Title}</td>
                                        </tr>
                                        <tr>
                                            <td height="5" style="height: 5px; mso-line-height-rule: exactly; line-height: 100%; font-size: 5px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">&nbsp;
                                                
                                            </td>
                                        </tr>
                                        <tr height="3" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly">
                                            <td class="hide" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; width: 290px; height: 3px; line-height:100%; font-size: 3px"
                                                height="3">
                                                <img src="{!ServiceProviderDividerD}" allign="left" width="290" class="fluid" />
                                            </td>
                                        </tr>
                                        <!--[if !mso]><!-- -->
                                        <tr style="max-height: 0px; overflow: hidden;display:none;float:left;border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; height: 3px; line-height:100%; font-size: 3px"
                                            class="show">
                                            <th valign="top">
                                                <img src="{!ServiceProviderDividerM}" style=" height: 3px;" height="3" class="fluid" />
                                            </th>
                                        </tr>
                                        <!--<![endif]-->
                                        <tr style="border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                            <td height="25" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mso_text" align="left" valign="top"
                                                style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:30px; line-height: 34px; color:#000000; font-weight:bold; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                <b>
                                                    <apex:outputText value="{0,date,EEEE, MMM' 'dd', 'yyyy}">
                                                        <apex:Param value="{!jobDate - (4/24)}" />
                                                    </apex:OutputText>
                                                </b>
                                            </td>                                            
                                        </tr>
                                        <tr>
                                            <td class="mso_text" align="left" valign="top"
                                                style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:30px; line-height: 34px; color:#000000; font-weight:bold; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                <b>
                                                    <apex:outputText >
                                                        {!jobTime}
                                                    </apex:outputText>
                                                </b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25"
                                                style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                    </table>
                                </th>
                                <th class="mob_stack mob_padL0" valign="top" style="padding:0 0 0 20px; mso-padding-alt:0 0 0 17.5pt;">
                                    <table align="Center" border="0" cellpadding="0" cellspacing="0" style="Margin: 0 auto; width: 290px;">
                                        <tr style="border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                                            <td class="mso_text" align="center" valign="top" height="25" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; height: 25px; mso-line-height-rule: exactly; font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:22px; line-height: 100%; color:#000000; font-weight:normal;">
                                                Your Information</td>
                                        </tr>
                                        <tr>
                                            <td height="5" style="height: 5px; mso-line-height-rule: exactly; line-height: 100%; font-size: 5px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">&nbsp;
                                                
                                            </td>
                                        </tr>
                                        <tr height="3" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly">
                                            <td class="hide" valign="top" style="border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; width: 290px; height: 3px; line-height:100%; font-size: 3px"
                                                height="3">
                                                <img src="{!YourInformationDividerD}" allign="left" width="290" class="fluid" />
                                            </td>
                                        </tr>
                                        <!--[if !mso]><!-- -->
                                        <tr style="max-height: 0px; overflow: hidden;display:none;float:left;border:0; margin: 0 auto; padding:0; border-collapse:collapse; mso-line-height-rule:exactly; height: 3px; line-height:100%; font-size: 3px"
                                            class="show">
                                            <th valign="top">
                                                <img src="{!YourInformationDividerM}" style=" height: 3px;" height="3" class="fluid" />
                                            </th>
                                        </tr>
                                        <!--<![endif]-->
                                        <tr>
                                            <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                <b>Name:</b> {!custName}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <table width="290" align="left" style="height:max-content; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto">
                                        <tr>
                                            <td height="100%" width="auto" valign="TOP" style="vertical-align: top; margin:0 auto; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto">
                                                <table height="100%" valign="TOP" style="vertical-align: top; width:auto !important">
                                                    <tr height="100%" valign="TOP" style="vertical-align: top">
                                                        <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top;">
                                                            <b>Address:</b>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td height="100%" width="100%" valign="top" align="left" style="vertical-align: top; margin:0 auto; border-collapse:collapse;mso-padding-alt:0 0 0 0; padding:0 0 0 0; margin:0 auto; text-align:left; max-width:120px !important">
                                                <table height="100%" valign="top" align="left" style="vertical-align: top">
                                                    <td height="100%" valign="top" align="left" style="vertical-align: top">
                                                        <table height="100%" valign="top" align="left" style="vertical-align: top;">
                                                            <tr height="100%" valign="TOP" style="vertical-align: top;">
                                                                <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top">
                                                                    {!Address1}
                                                                </td>
                                                            </tr>
                                                            <tr height="100%" valign="TOP" style="vertical-align: top;">
                                                                <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0; vertical-align:top">
                                                                    {!Address2}
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                    <table>
                                        <tr>
                                            <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                <b>Phone Number:</b>
                                                <a href="tel:{!custPhone}" style="text-decoration: none; color: #000000;">{!custPhone}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25" style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px;">&nbsp;
                                                
                                            </td>
                                        </tr>
                                    </table>
                                    <table>
                                        <tr>
                                            <td class="mso_text" align="left" valign="top" style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                                                <b>Email:</b>
                                                <a href="mailto:{!SPemail}" style="text-decoration: none; color: #000000;">{!custemail}</a>
                                            </td>
                                        </tr>
                                    </table>
                                </th>
                            </tr>
                        </table>
                    </apex:outputText>
                    </td>
                </tr>
                <apex:outputText rendered="{!NameString != 'Raw Lead'}">
                <tr>
                    <td height="15"
                        style="height: 15px; mso-line-height-rule: exactly; line-height: 100%; font-size: 15px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                        &nbsp;
                    </td>
                </tr>
                <tr>
                    <td class="mso_text mob_padB20" align="left" valign="top"
                        style="font-family:Arial, Helvetica, sans-serif; text-align:left; font-size:16px; line-height: 20px; color:#000000; font-weight:normal; padding:0 0 0 0; mso-padding-alt:0 0 0 0;">
                        Have questions or need to reschedule? Call 
                        
                        
                        <apex:outputText rendered="{!SPNum1 == ''}">
                        <a href=" tel:{!SPNum2}" style="text-decoration: none; color: #000000;">{!SPNum2}.</a>
                        </apex:outputText>
                                                           
                        <apex:outputText rendered="{!SPNum1 != ''}">
                        <a href=" tel:{!SPNum1}" style="text-decoration: none; color: #000000;">{!SPNum1}.</a> 
                        </apex:outputText>
                        
                    </td>
                </tr>
                <tr>
                    <td height="25"
                        style="height: 25px; mso-line-height-rule: exactly; line-height: 100%; font-size: 25px; border:0; margin: 0 auto; padding:0; border-collapse:collapse">
                        &nbsp;
                    </td>
                </tr>
                </apex:outputText>
            </table>
        </td>
    </tr>

    <!--================================== END SERVICE PROVIDER DETAILS **PLEASE DO NOT TOUCH** =================================================================-->
</apex:component>