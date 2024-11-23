import java.io.IOException;
import java.io.PrintWriter;
import java.net.http.HttpRequest;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.IOException;

import java.io.IOException;

public class ex5b extends HttpServlet 
{
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();

        
        String name = request.getParameter("name");
        String email = request.getParameter("email");
        String cake = request.getParameter("cake");

        
        if (name == null || name.trim().isEmpty() || 
            email == null || email.trim().isEmpty() || 
            cake == null || cake.trim().isEmpty()) 
        {
            
            out.println("<h3 style='color:red;'>All fields are required! Please try again.</h3>");
            out.println("<a href='index.html'>Go back to the form</a>");
        } 
        else 
        {
            
            out.println("<h2>Order Confirmation</h2>");
            out.println("<p>Thank you, <strong>" + name + "</strong>!</p>");
            out.println("<p>Your order for a <strong>" + cake + "</strong> cake has been placed successfully.</p>");
            out.println("<p>A confirmation email will be sent to: <strong>" + email + "</strong></p>");
        }
        out.close();
    }
}
