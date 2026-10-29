To design a robust and scalable system for inter-agent communication and coordination in a dynamic, self-organizing network of autonomous agents, focus on the following core principles:

1. **Decentralized Communication Protocols**: Implement peer-to-peer communication protocols that allow agents to exchange information directly without centralized control. Use lightweight, asynchronous messaging systems to minimize latency and overhead.

2. **Consensus Algorithms**: Employ consensus algorithms like Raft or Paxos for decision-making processes that require agreement among agents. These algorithms ensure consistency and fault tolerance, even in the presence of node failures.

3. **Adaptive Resource Allocation**: Design agents to use predictive analytics and machine learning models to anticipate resource demands and adjust allocations dynamically. This involves real-time monitoring and feedback loops to optimize resource distribution.

4. **Fault Tolerance and Redundancy**: Incorporate redundancy at multiple levels—data, computation, and communication. Use techniques like data replication and task duplication to ensure system resilience against failures.

5. **Autonomy and Coordination Balance**: Allow agents to operate independently by defining clear boundaries for their decision-making capabilities. Use incentive mechanisms, such as token-based economies, to align individual agent goals with system-level objectives.

6. **Scalability through Modularity**: Structure the system into modular components that can be independently scaled. This involves designing agents and communication protocols that can handle increasing loads without degradation in performance.

7. **Security Measures**: Implement cryptographic techniques to secure communications and data integrity. Use secure multi-party computation to enable agents to collaborate on sensitive tasks without exposing their data.

8. **Dynamic Topology Management**: Enable agents to dynamically adjust their network topology in response to changes in the environment or resource availability. This involves algorithms for efficient routing and load balancing.

9. **Monitoring and Self-Healing**: Integrate continuous monitoring tools to detect anomalies and trigger self-healing processes. This includes automated recovery protocols that can reconfigure the network in response to failures.

10. **Evolutionary Adaptation**: Design the system to evolve over time by incorporating mechanisms for agents to learn from past interactions and adapt their strategies accordingly. This involves using evolutionary algorithms to optimize agent behaviors.

By focusing on these principles, the system can achieve a balance between individual agent autonomy and collective efficiency, while remaining resilient to unpredictable failures and evolving resource demands.