public with sharing class DocumentHelper {
    
    public String dName { get; set; } // Property to hold the document name
    public String documentURL; // Property for the document URL

    // Method to retrieve the image URL based on document name
    public String getDocumentURL() {
        if (dName != null) {
            try {
                // Query the Document object by its Name (Title)
                Document doc = [SELECT Id, LastModifiedDate FROM Document WHERE Name = :dName LIMIT 1];

                // Get the base URL of your Salesforce instance
                String baseUrl = URL.getOrgDomainUrl().toExternalForm();

                // Get the OrgId
                String orgId = UserInfo.getOrganizationId();

                // Get the LastModifiedDate in milliseconds since epoch
                Long lastModMillis = doc.LastModifiedDate.getTime();

                // Construct the full URL
                documentURL = baseUrl + '/servlet/servlet.ImageServer?id=' + doc.Id + '&oid=' + orgId + '&lastMod=' + lastModMillis;
                
            } catch (Exception e) {
                documentURL = 'DOCUMENT NOT FOUND';
            }
        } else {
            documentURL = 'DOC NAME DOES NOT EXIST';
        }
        return documentURL;
    }
}
