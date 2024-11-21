<apex:component access="global">
  <apex:attribute name="col1Heading" description="Heading for column 1" type="String" />
  <apex:attribute name="col1HeadingWidth" description="Width in numbers of column 1's heading title for the orange line" type="String" />
  <apex:attribute name="col1Label1" description="Label for column 1's first term" type="String" />
  <apex:attribute name="col1Desc1" description="Description for column 1's first term" type="String" />
  <apex:attribute name="col1Label2" description="Label for column 1's second term" type="String" />
  <apex:attribute name="col1Desc2" description="Description for column 1's second term" type="String" />
  <apex:attribute name="col1Label3" description="Label for column 1's third term" type="String" />
  <apex:attribute name="col1Desc3" description="Description for column 1's third term" type="String" />
  <apex:attribute name="col2Heading" description="Heading for column 2" type="String" />
  <apex:attribute name="col2HeadingWidth" description="Width in numbers of column 2's heading title for the orange line" type="String" />
  <apex:attribute name="col2Label1" description="Label for column 2's first term" type="String" />
  <apex:attribute name="col2Desc1" description="Description for column 2's first term" type="String" />
  <apex:attribute name="col2Label2" description="Label for column 2's second term" type="String" />
  <apex:attribute name="col2Desc2" description="Description for column 2's second term" type="String" />
  <apex:attribute name="col2Label3" description="Label for column 2's third term" type="String" />
  <apex:attribute name="col2Desc3" description="Description for column 2's third term" type="String" />

<tr>
    <td valign="top">
        <table role="presentation" class="wrapper" align="center" border="0" cellpadding="0" cellspacing="0"
            style="margin: 0 auto; width: 600px;" width="595">
            <tr>
                <td valign="top">
                    <table align="left" border="0" cellpadding="0" cellspacing="0" style="margin: 0 auto; width: 100%">
                        <tr>
                            <td class="mob_stack" valign="top"
                                style="padding: 0 0 0 0; mso-padding-alt: 0 0 0 0; border: 0; margin: 0 auto;">
                                <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0"
                                    style="margin: 0 auto; width: 295px;">
                                    <tr><td>
                                        <c:pvfc_SectionHeader headline="{!col1Heading}" underlineWidth="{!col1HeadingWidth}" />
                                    </td></tr>
                                    <tr>
                                        <td height="8"
                                            style="height: 8px; mso-line-height-rule: exactly; line-height: 100%; font-size: 8px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color:#000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt:0 0 0 0;">
                                            <b>{!col1Label1}:</b> {!col1Desc1}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="16"
                                            style="height: 16px; mso-line-height-rule: exactly; line-height: 100%; font-size: 16px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color: #000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt: 0 0 0 0;">
                                            <b>{!col1Label2}:</b> {!col1Desc2}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="16"
                                            style="height: 16px; mso-line-height-rule: exactly; line-height: 100%; font-size: 16px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text mob_padB20" align="left" valign="top"
                                            style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color: #000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt: 0 0 0 0;">
                                            <b>{!col1Label3}:</b> {!col1Desc3}
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td class="mob_stack mob_padL0" valign="top"
                                style="border: 0; margin: 0 auto; padding: 0 0 0 20px; mso-padding-alt: 0 0 0 17.5pt;">
                                <table role="presentation" align="center" border="0" cellpadding="0" cellspacing="0"
                                    style="margin: 0 auto; width: 295px;">
                                    <tr><td>
                                        <c:pvfc_SectionHeader headline="{!col2Heading}" underlineWidth="{!col2HeadingWidth}" />
                                    </td></tr>
                                    <tr style="border :0; margin: 0 auto; padding: 0; border-collapse: collapse">
                                        <td height="8"
                                            style="border: 0; margin: 0 auto; padding: 0; border-collapse: collapse; height: 8px; mso-line-height-rule: exactly; line-height: 100%; font-size: 8px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text" align="left" valign="top"
                                            style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color: #000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt: 0 0 0 0;">
                                            <b>{!col2Label1}:</b> {!col2Desc1}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="16"
                                            style="height: 16px; mso-line-height-rule: exactly; line-height: 100%; font-size: 16px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mso_text mob_padB20" align="left" valign="top"
                                            style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color: #000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt: 0 0 0 0;">
                                            <b>{!col2Label2}:</b> {!col2Desc2}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="16" style="height: 16px; mso-line-height-rule: exactly; line-height: 100%; font-size: 16px;">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                       <td class="mso_text" align="left" valign="top"
                                            style="font-family: Arial, Helvetica, sans-serif; text-align: left; font-size: 16px; line-height: 20px; color: #000000; font-weight: normal; padding: 0 0 0 0; mso-padding-alt: 0 0 0 0;">
                                            <b>{!col2Label3}:</b> {!col2Desc3}
                                        </td>    
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
</apex:component>