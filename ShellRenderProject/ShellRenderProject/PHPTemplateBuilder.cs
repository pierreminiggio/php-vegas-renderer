using ScriptPortal.Vegas;
using System;
using System.Collections.Generic;
using System.IO;

namespace ShellRenderProject
{
    public class EntryPoint
    {
        public void FromVegas(Vegas myVegas)
        {
            writeDownRenderersAndTemplates(myVegas.Renderers);
            myVegas.Exit();
        }

        public void writeDownRenderersAndTemplates(Renderers renderers)
        {

            List<RendererEntity> entityList = new List<RendererEntity>();

            foreach (Renderer renderer in renderers)
            {
                List<string> templateList = new List<string>();
                foreach (RenderTemplate template in renderer.Templates)
                {
                    templateList.Add(template.Name);
                }

                entityList.Add(new RendererEntity(renderer.FileTypeName, templateList));
            }

            string json = "[";

            foreach (RendererEntity entity in entityList)
            {
                if (json != "[") {
                    json += ",";
                }

                json += "{";
                json += "\"name\": \"" + entity.name + "\"";
                string jsonTemplates = "[";

                foreach (string templateName in entity.templates)
                {
                    if (jsonTemplates != "[") {
                        jsonTemplates += ",";
                    }

                    jsonTemplates += "\"" + templateName + "\"";
                }

                jsonTemplates += "]";
                json += ",";
                json += "\"templates\": " + jsonTemplates + "";
                json += "}";
            }

            json += "]";
            
            File.WriteAllText("./renderers.json", json);
        }
    }

    public class RendererEntity
    {
        public string name;
        public List<string> templates;

        public RendererEntity(string rendererName, List<string> templateList)
        {
            name = rendererName;
            templates = templateList;
        }
    }
}
